<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //课程分类列表
    public function index()
    {
        $categories = Category::paginate(20);
        return view('admin/curriculum/categoryList', compact('categories'));
    }
    
    public function create(Category $categories, Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate(request(), [
                'catName' => 'required|min:2|max:50',
                'enName' => 'required|min:2|max:50',
                'pid' => 'required|integer',
            ]);
            $data = [
                'catName' => request('catName'),
                'enName' => request('enName'),  
                'pid' => request('pid'),
                'catType' => 1, // 1为课程，2为班级
            ];
            if (Category::create($data)) {
                return redirect('admin/categories');
            } else {
                return back();
            }
        }
        return view('admin/curriculum/categoryCreate');
    }

    public function createChild(Request $request, $category)
    {
        if ($request->isMethod('post')) {
//            dd($category);
            $this->validate(request(), [
                'catName' => 'required|min:2|max:50',
                'enName' => 'required|min:2|max:50',
            ]);
            $data = [
                'catName' => request('catName'),
                'enName' => request('enName'),
                'pid' => $category,
                'catType' => 1, // 1为课程，2为班级
            ];
            if (Category::create($data)) {
                return redirect('admin/categories');
            } else {
                return back();
            }
        }
        return view('admin/curriculum/categoryCreateChild', compact('category'));
    }

    public function update()
    {
        return view('admin/curriculum/categoryUpdate');
    }

    public function delete()
    {

    }
}
