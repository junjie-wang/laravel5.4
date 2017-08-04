<?php

namespace App\Admin\Controllers;

use App\Models\AdminPermission;
use App\Models\AdminUser;
use App\Post;
use Illuminate\Http\Request;
use App\Admin\Controllers\Controller;

class PermissionController extends Controller
{
    //权限列表页面
    public function index()
    {
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
//        echo '<pre>';
//        print_r($trees);exit;
        return view('admin/permission/index', compact('trees'));
    }

    //创建权限
    public function create()
    {
        $permissions = new AdminPermission();
        $items = $permissions->getCategoryInfoTest();
        return view('admin/permission/add', compact('items'));
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:2',
            'description' => 'required',
            'pid' => 'required|integer',
        ]);

//        dd(request(['name', 'description', 'pid']));
        \App\Models\AdminPermission::create(request(['name', 'description', 'pid']));

        return redirect('admin/permissions');
    }
}

