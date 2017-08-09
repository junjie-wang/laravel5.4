<?php

namespace App\Admin\Controllers;

use App\Models\Curriculum;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    //课程管理
    public function index()
    {
        $curriculums = Curriculum::orderBy('id', 'desc')->paginate(15);
        return view('admin/curriculum/index', compact('curriculums'));
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
        return view('admin/curriculum/create');
    }
}
