<?php

namespace App\Console\Commands;

use App\Jobs\NewsLetterJob;
use App\Models\Subscripe;
use Illuminate\Console\Command;

class NewsLetterCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:news-letter-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command To Send Emails for the site subscripers ';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $subscripers=Subscripe::where('active',1)->get();
        foreach ($subscripers as $subscriper) {
            NewsLetterJob::dispatch($subscriper);
        }
    }
}
