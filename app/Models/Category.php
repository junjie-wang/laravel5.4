<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['catName', 'enName', 'catType', 'pid'];

    //测试函数 （测试正式函数）
    public function getCategoryInfoTest(){
        $sourceItems = $this->get();
        $targetItems = new Collection();
        $this->getCategoryTest($sourceItems, $targetItems);
        return $targetItems;
    }

    //使用递归获取分类信息测试函数 （测试正式函数）
    public function getCategoryTest($sourceItems, $targetItems, $pid=0, $str=' '){
        $str .= '&nbsp;&nbsp;';
        foreach ($sourceItems as $k => $v) {
            if($v->pid == $pid){
                $v->pre = $str.$v->pre;
                $targetItems[] = $v;
                $this->getCategoryTest($sourceItems, $targetItems, $v->id, $str);
            }
        }
    }
}
