<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //展示后台首页
    public function index()
    {
        if (Auth::check()) {
            return view('admin.home.index');
        }
        return view('admin/login/index');
    }
}
