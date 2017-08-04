<?php

namespace App\Admin\Controllers;

use App\Models\AdminUser;
use App\Post;
use Illuminate\Http\Request;
use App\Admin\Controllers\Controller;

class RoleController extends Controller
{
    //角色列表
    public function index()
    {
        $roles = \App\Models\AdminRole::paginate(50);
        return view('admin/role/index', compact('roles'));
    }

    //创建角色
    public function create()
    {
        return view('admin/role/add');
    }

    public function store()
    {
        $this->validate(request(), [
           'name' => 'required|min:2',
            'description' => 'required'
        ]);

        \App\Models\AdminRole::create(request(['name', 'description']));

        return redirect('admin/roles');
    }

    //角色和权限的关系页面
    public function permission(\App\Models\AdminRole $role)
    {
        //获取所有权限
        $permissions = \App\Models\AdminPermission::orderBy('id', 'asc')->paginate(1000)->toArray();
        $trees = array();
        $permissions = $permissions['data'];
        foreach ($permissions as $key =>$sourceItem) {
            $permissions[$key + 1] = $sourceItem;
            unset($permissions[0]);
        }
        foreach($permissions as $item){
            if(isset($permissions[$item['pid']])){
                $permissions[$item['pid']]['son'][] = &$permissions[$item['id']];
            }else{
                $trees[] = &$permissions[$item['id']];
            }
        }
        //获取当前用户权限
        $myPermissions = $role->permissions->toArray();
        foreach ($myPermissions as $myPermission) {
            $myPer[] = $myPermission['id'];
        }
        return view('admin/role/permission', compact('trees', 'myPer', 'role'));
    }

    //保存角色权限行为 
    public function storePermission(\App\Models\AdminRole $role)
    {
        $this->validate(request(), [
            'permissions' => 'required|array',
        ]);
        $permissions = \App\Models\AdminPermission::find(request('permissions'));
        $myPermissions = $role->permissions;
        //要增加的
        $addPermissions = $permissions->diff($myPermissions);
        foreach ($addPermissions as $permission) {
            $role->grantPermission($permission);
        }
        //要删除的
        $deletePermissions = $myPermissions->diff($permissions);
        foreach ($deletePermissions as $permission) {
            $role-> deletePermission($permission);
        }

        return redirect('admin/roles');
    }


}
