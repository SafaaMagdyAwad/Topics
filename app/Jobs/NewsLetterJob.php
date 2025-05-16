<?php

namespace App\Jobs;

use App\Mail\NewsLetterMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class NewsLetterJob implements ShouldQueue
{
    use Queueable;

    public $subscriper;
    /**
     * Create a new job instance.
     */
    public function __construct($subscriper)
    {
        $this->subscriper=$subscriper;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->subscriper->email)->send(new NewsLetterMail());
    }
}
