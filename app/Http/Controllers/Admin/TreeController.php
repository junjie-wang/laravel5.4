<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tree;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TreeController extends Controller
{
    public function index(){
        $category = Tree::orderBy('id', 'asc')->paginate(100)->toArray();
//        dd($category['data']);
//        $items = $category->getCategoryInfoTest1();
//        foreach ($items as $key => $item) {
//            $permissions[] = $item->CateName;
//        }
//        var_dump($items);exit;
        $trees = array();
        $permissions = $category['data'];
        foreach ($permissions as $key =>$sourceItem) {
            $permissions[$key + 1] = $sourceItem;
            unset($permissions[0]);
        }
//        echo '<pre>';
//        print_r($permissions);exit;
        foreach($permissions as $item){
            if(isset($permissions[$item['pid']])){
                $permissions[$item['pid']]['son'][] = &$permissions[$item['id']];
            }else{
                $trees[] = &$permissions[$item['id']];
            }
        }
//        foreach ($trees as &$tree) {
//            if (isset($tree['son'])) {
//            } else {
//                $tree['son'][] = [];
//            }
//        }
//        echo '<pre>';
//        print_r($trees);exit;
        $items = $trees;
        return view('admin/permission/tree_test', compact('items'));

    }
}
