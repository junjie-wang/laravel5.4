<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;

class AdminPermission extends Model
{
    protected $table = 'admin_permissions';

    //权限属于哪个角色
    public function roles()
    {
        return $this->belongsToMany(\App\Models\AdminRole::class, 'admin_permission_role', 'permission_id', 'role_id')->withPivot(['permission_id', 'role_id']);
    }

    //使用递归获取分类 （正式函数）
    public function getCategory($sourceItems, $targetItems, $pid=0){
        foreach ($sourceItems as $k => $v) {
            if($v->pid == $pid){
                $targetItems[] = $v;
                $this->getCategory($sourceItems, $targetItems, $v->id);
            }
        }
    }

    //使用递归获取分类信息测试函数 （测试正式函数）
    public function getCategoryTest($sourceItems, $targetItems, $pid=0, $str='ㅣ'){
        $str .= 'ㅡㅡ';
        foreach ($sourceItems as $k => $v) {
            if($v->pid == $pid){
                $v->CateName = $str.$v->CateName;
                $targetItems[] = $v;
                $this->getCategoryTest($sourceItems, $targetItems, $v->id, $str);
            }
        }
    }

    //使用递归获取分类信息 （正式函数）
    public function getCategoryInfo(){
        $sourceItems = $this->get();
        $targetItems = new Collection;
        $this->getCategory($sourceItems, $targetItems, 0);
        return $targetItems;
    }

    //测试函数 （测试正式函数）
    public function getCategoryInfoTest(){
        $sourceItems = $this->get();
        $targetItems = new Collection;
        $this->getCategoryTest($sourceItems, $targetItems);
        return $targetItems;
    }

    //自己测试 （测试正式函数）
    public function getCategoryInfoTest1(){
        $sourceItems = $this->get()->toArray();
        $tree = array();
        foreach ($sourceItems as $key =>$sourceItem) {
            $sourceItems[$key + 1] = $sourceItem;
            unset($sourceItems[0]);
        }
        foreach($sourceItems as $item){
            if(isset($sourceItems[$item['pid']])){
                $sourceItems[$item['pid']]['son'][] = &$sourceItems[$item['id']];
            }else{
                $tree[] = &$sourceItems[$item['id']];
            }
        }
//        echo '<pre>';
//        print_r($tree);exit;
        return $tree;
    }
}
