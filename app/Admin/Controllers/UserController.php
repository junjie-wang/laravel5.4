<?php

namespace App\Admin\Controllers;

use App\Models\AdminUser;
use App\Post;
use Illuminate\Http\Request;
use App\Admin\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //管理员列表页面
    public function index()
    {
        $users = AdminUser::orderBy('created_at', 'desc')->paginate(20);
        foreach ($users as &$user) {
            $my = [];
            $myRoles = $user->roles;
            foreach ($myRoles as $myRole) {
                $my[] = $myRole->description;
                $user->my = implode(' ', $my);
            }
        }
        return view('admin/user/index', compact('users'));
    }

    //管理员创建页面
    public function create()
    {
        return view('admin/user/create');
    }

    //创建操作
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:2',
            'email' => 'required|email',
            'password' => 'required|min:6|max:20|confirmed',
        ]);

        $name = request('name');
        $email = request('email');
        $password = bcrypt(request('password'));
        AdminUser::create(compact('name', 'email', 'password'));
        return redirect('/admin/users/');
    }

    public function edit(AdminUser $adminUser, $user)
    {
        $users = AdminUser::find($user);
        return view('admin/user/edit', compact('users'));
    }

    public function update(AdminUser $adminUser, $user)
    {
        $this->validate(request(), [
            'name' => 'required|min:2',
            'email' => 'required|email',
            'password' => 'required|min:6|max:20',
        ]);

        $adminUser->name = request('name');
        $adminUser->password = bcrypt(request('password'));
        $data = [
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ];
        $s = $adminUser->where('id', $user)->update($data);

        return redirect('/admin/users/');
    }
    
    public function delete($user)
    {
        AdminUser::where('id', $user)->delete();

        return redirect('/admin/users/');
    }

    //用户角色页面
    public function role(\App\Models\AdminUser $user)
    {
        $roles = \App\Models\AdminRole::all();
        $myRoles = $user->roles;
        return view('admin/user/role', compact('roles', 'myRoles', 'user'));
    }

    //储存用户角色
    public function storeRole(\App\Models\AdminUser $user)
    {
        $this->validate(request(), [
           'roles' => 'required|array',
        ]);
        $roles = \App\Models\AdminRole::findMany(request('roles'));
        $myRoles = $user->roles;
        //要增加的
        $addRoles = $roles->diff($myRoles);
        foreach ($addRoles as $role) {
            $user->assignRole($role);
        }
        //要删除的
        $deleteRoles = $myRoles->diff($roles);
        foreach ($deleteRoles as $role) {
            $user-> deleteRole($role);
        }

        return redirect('admin/users');
    }


}
