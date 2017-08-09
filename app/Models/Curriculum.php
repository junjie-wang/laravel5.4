<?php

namespace App\Models;

class Curriculum extends Model
{
    protected $table = 'curriculums';

    public function category()
    {
        return $this->belongsTo('\App\Models\Category');
    }
}
