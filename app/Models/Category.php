<?php

namespace App\Models;


class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['catName', 'enName', 'catType', 'pid'];
}
