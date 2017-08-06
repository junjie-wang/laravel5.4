<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;

class Model extends EloquentModel
{
    protected $guard = [];

    protected $fillable = ['name', 'password', 'email', 'sex', 'description', 'pid', 'mobile', 'remark', 'headImg', 'subject', 'title', 'content'];
}
