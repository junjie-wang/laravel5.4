<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUser extends Authenticatable
{
    protected $rememberTokenName = '';

    protected $guarded = [];

//    protected $fillable = [
//        'name', 'password', 'email',
//    ];

    //用户有哪一角色
    public function roles()
    {
        return $this->belongsToMany(\App\Models\AdminRole::class, 'admin_role_user', 'user_id', 'role_id')->withPivot(['user_id', 'role_id']);
    }

    //判断是否有某个角色，某些角色
    public function isInRoles($roles)
    {
        return !!$roles->intersect($this->roles)->count();
    }

    //给用户分配角色
    public function assignRole($role)
    {
        return $this->roles()->save($role);
    }

    //取消用户分配的角色
    public function deleteRole($role)
    {
        return $this->roles()->detach($role);
    }

    //用户是否有权限
    public function hasPermission($permission)
    {
        return $this->isInRoles($permission->roles);
    }

    //站内通知
    public function notices()
    {
        return $this->belongsToMany(Notice::class, 'user_notice', 'user_id', 'notice_id')->withPivot(['user_id', 'notice_id']);
    }

    //给用户增加通知
    public function addNotice($notice)
    {
        return $this->notices()->save($notice); //删除用detach
    }

}
