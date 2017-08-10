<?php

namespace App\Admin\Controllers;

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
}
