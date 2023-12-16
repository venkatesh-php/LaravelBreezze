<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;

class JobOrderShipped implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to("venkatesh.cse.tec@gmail.com")->send(new OrderShipped());

        // Mail::to("venkatesh@gmail.com")->later(now()->addMinutes(1),new OrderShipped());

        // Mail::to("venkatesh.cse@gmail.com")->later(now()->addMinutes(2), new OrderShipped());
    }
}
