<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Curriculum;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    //课程管理
    public function index(Request $request)
    {
        $cat = new Category();
        $items = $cat->getCategoryInfoTest();
        if ($request->isMethod('post')) {
            $where = [
                ['category_id', '=', request('category_id')],
                ['status', '=', request('status')],
                ['name', 'like', '%'.request('name').'%']
            ];
            if (request('category_id') == 0) unset($where[0]);
            if (request('status') == null) unset($where[1]);
            $curriculums = Curriculum::where($where)->orderBy('id', 'desc')->paginate(15);
            foreach ($curriculums as &$curriculum) {
                $curriculum['category_id'] = $curriculum->category->catName;
            }
            return $curriculums;
        }
        $curriculums = Curriculum::orderBy('id', 'desc')->paginate(15);
        foreach ($curriculums as &$curriculum) {
            $curriculum['category_id'] = $curriculum->category->catName;
        }
        return view('admin/curriculum/index', compact('curriculums', 'items'));
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate(request(), [
                'name' => 'required|min:2|max:50',
                'category' => 'required|integer',
                'price' => 'required',
                'serialise' => 'required|integer',
            ]);
            $date = [
                'name' => request('name'),
                'category' => request('category'),
                'price' => request('price'),
                'serialise' => request('serialise'),
                'description' => request('description'),
                'status' => 0,
            ];
            if (Curriculum::create($date)) {
                return redirect('/admin/curriculums');
            } else {
                return back();
            }
        }
        $cat = new Category();
        $items = $cat->getCategoryInfoTest();
        return view('admin/curriculum/create', compact('items'));
    }
    
    public function recommend(Request $request)
    {
        $cat = new Category();
        $items = $cat->getCategoryInfoTest();
        if ($request->isMethod('post')) {
            $where = [
                ['category_id', '=', request('category_id')],
                ['status', '=', request('status')],
                ['name', 'like', '%'.request('name').'%'],
                ['recommend', '=', 1]
            ];
            if (request('category_id') == 0) unset($where[0]);
            if (request('status') == null) unset($where[1]);
            $curriculums = Curriculum::where($where)->orderBy('id', 'desc')->paginate(15);
            foreach ($curriculums as &$curriculum) {
                $curriculum['category_id'] = $curriculum->category->catName;
            }
            return $curriculums;
        }
        $curriculums = Curriculum::where('recommend', 1)->orderBy('id', 'desc')->paginate(15);
        foreach ($curriculums as &$curriculum) {
            $curriculum['category_id'] = $curriculum->category->catName;
        }
        return view('admin/curriculum/recommend', compact('curriculums', 'items'));
    }

    public function changeOrder(Request $request)
    {
        $this->validate(request(), [
            'id' => 'required|integer',
            'list_order' => 'required|integer'
        ], [
            'list_order' => '序号'
        ]);
        $data = [
          'list_order' => request('list_order')
        ];
        $res = Curriculum::where('id', request('id'))->update($data);
        if ($res) {
            return redirect('admin/recommend');
        } else {
            return back();
        }
    }

    public function isRecommend($curriculumId)
    {
        Curriculum::where('id', $curriculumId)->update(['recommend' => 0]);
//        return redirect('admin/recommend');
        return back();
    }
}
