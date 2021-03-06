<?php

namespace App\Http\Controllers\Admin;

use App\Jobs\SendMessage;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        $notices = Notice::paginate(20);
        return view('admin/notice/index', compact('notices'));
    }

    public function create()
    {
        return view('admin/notice/create');
    }

    public function store()
    {
//        dd(request('content'));
        $this->validate(request(), [
            'title' => 'required|string',
            'content' => 'required|string',
        ]);
        $notice = Notice::create(request(['title', 'content']));

        dispatch(new SendMessage($notice));

        return redirect('admin/notices');
    }

    public function show()
    {
        //获取当前用户
        $user = \Auth::user();
        $notices = $user->notices;
        return view('admin/notice/show', compact('notices'));
    }

}
