<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

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
           'name' => 'required|min:2',
           'password' => 'required|min:6|max:20',
        ]);

        $user = request(['name', 'password']);
        if (\Auth::guard('admin')->attempt($user)) {
            return Redirect::to('/admin');
        }

        return \Redirect::back()->withErrors('帐号密码不匹配');
    }

    //退出操作
    public function logout()
    {
        \Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
    
    //更改密码
    public function resetPassword(Request $request)
    {
        $userInfo = AdminUser::find(Auth::id());
        if ($request->isMethod('post')) {
            $this->validate(request(), [
                'old_password' => 'required|min:6|max:20',
                'password' => 'required|min:6|max:20|confirmed'
            ]);
            if (!Hash::check(request('old_password'), $userInfo->password)) {
                return back()->withErrors('输入的原始密码不正确');
            }
            $data = ['password' => bcrypt(request('password'))];
            $result = AdminUser::where('id', Auth::id())->update($data);
            if ($result) {
                return back();
            }
        }
        return view('admin/login/reset', compact('userInfo'));
    }
}
