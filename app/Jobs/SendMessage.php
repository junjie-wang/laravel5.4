<?php

namespace App\Jobs;

use App\Models\AdminUser;
use App\Models\Notice;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendMessage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $notice;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Notice $notice)
    {
        //
        $this->notice = $notice;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //通知每个管理员系统消息
        $users = AdminUser::all();
        foreach ($users as $user) {
            $user->addNotice($this->notice);
        }
    }
}
