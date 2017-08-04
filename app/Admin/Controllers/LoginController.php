<?php

namespace App\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //登录展示页
    public function index()
    {
        return view('admin.login.index');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
           'name' => 'required|min:4',
           'password' => 'required|min:6|max:20',
        ]);

        $user = request(['name', 'password']);
        if (\Auth::guard('admin')->attempt($user)) {
            return redirect('/admin/');
        }

        return \Redirect::back()->withErrors('帐号密码不匹配');
    }

    //退出操作
    public function logout()
    {
        \Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
