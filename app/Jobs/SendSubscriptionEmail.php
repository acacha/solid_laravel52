<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\User;
use Exception;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class SendSubscriptionEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;
    protected $user;

    /**
     * SendSubscriptionEmail constructor.
     * @param $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }


    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
//        throw new Exception("asdasdasdasd");
        //TODO Send email
        Mail::send('emails.reminder', ['user' => $this->user], function ($m) use ($user) {
            $m->from('no-reply@myapp.com', 'My App');

            $m->to($this->user->email)->subject('Welcome!');
        });
//        sleep(10);
    }
}
