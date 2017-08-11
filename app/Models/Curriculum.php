<?php

namespace App\Models;

class Curriculum extends Model
{
    protected $table = 'curriculums';
    protected $fillable = ['name', 'description', 'list_order', 'recommend', 'price', 'category_id', 'status', 'serialise'];

    public function category()
    {
        return $this->belongsTo('\App\Models\Category');
    }
}
