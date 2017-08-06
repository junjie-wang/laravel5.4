<?php

namespace App\Admin\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //教师列表页
    public function index()
    {
        $teachers = Teacher::paginate(20);
        return view('admin/teacher/index', compact('teachers'));
    }
    
    //新增教师
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate(request(), [
                'name' => 'required|min:2',
                'sex' => 'required|integer',
                'mobile' => 'required|integer',
                'email' => 'required|email',
                'subject' => 'required|min:2|max:30',
                'password' => 'required|min:6|max:20|confirmed',
            ]);

            $name = request('name');
            $sex = request('sex');
            $mobile = request('mobile');
            $subject = request('subject');
            $email = request('email');
            $password = bcrypt(request('password'));
            Teacher::create(compact('name', 'sex', 'mobile', 'subject', 'email', 'password'));
            return redirect('admin/teachers');
        }
        return view('admin/teacher/add');
    }

    //教师信息修改
    public function update(Teacher $teacher, Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate(request(), [
                'name' => 'required|min:2',
                'sex' => 'required|integer',
                'mobile' => 'required|integer',
                'email' => 'required|email',
                'subject' => 'required|min:2|max:30',
//                'password' => 'required|min:6|max:20|confirmed',
            ]);
            $data = [
                'name' => request('name'),
                'sex' => request('sex'),
                'mobile' => request('mobile'),
                'subject' => request('subject'),
                'email' => request('email'),
                'password' => bcrypt(request('password')),
            ];
            Teacher::where('id', $teacher->id)->update($data);
            return redirect('admin/teachers');
        }
        return view('admin/teacher/edit', compact('teacher'));
    }

    //教师信息删除
    public function delete($teacher)
    {
        Teacher::where('id', $teacher)->delete();
        return redirect('admin/teachers');
    }
}
