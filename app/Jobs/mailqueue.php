<?php
namespace App\Jobs;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\model\shortnerurl;
use Log;
use Config;
use Illuminate\Support\Facades\Mail;
class mailqueue implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $maildata;
    public function __construct($maildata)
    {
        //
        $this->maildata   = $maildata;
    }
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $user = $this->maildata; 
        $var = Mail::send('mail.user.forgot',['user'=>$user],
              function($message) use ($user)
              {
                $message->to($user->email)
                        ->subject("Test");
              });
    }
}