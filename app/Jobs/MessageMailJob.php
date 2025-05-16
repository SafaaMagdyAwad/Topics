<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\MessageMail;
use Illuminate\Support\Facades\Mail;

class MessageMailJob implements ShouldQueue
{
    use Queueable;
 
    public $data;
    /**
     * Create a new job instance.
     */
    public function __construct($data)
    {
        $this->data=$data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

        Mail::to('admin.site@gmail.com')->send(new MessageMail($this->data));
        
    }
}
