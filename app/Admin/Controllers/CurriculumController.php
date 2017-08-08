<?php

namespace App\Admin\Controllers;

use App\Models\Curriculum;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    //课程管理
    public function index()
    {
        $curriculums = Curriculum::paginate(10);
        return view('admin/curriculum/index', $curriculums);
    }

    public function create()
    {
        return view('admin/curriculum/create');
    }
}
