<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class StoreJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $lampiran_1 = $this->data->lampiran_1;
        dd($lampiran_1);
        $lampiran_1->storeAs('public/lampiran', $lampiran_1->hashName());

        $lampiran_2 = $this->data->lampiran_2;
        $lampiran_2->storeAs('public/lampiran', $lampiran_2->hashName());

        $lampiran_3 = $this->data->lampiran_3;
        $lampiran_3->storeAs('public/lampiran', $lampiran_3->hashName());

        $lampiran_4 = $this->data->lampiran_4;
        $lampiran_4->storeAs('public/lampiran', $lampiran_4->hashName());

        $lampiran_5 = $this->data->lampiran_5;
        $lampiran_5->storeAs('public/lampiran', $lampiran_5->hashName());

        $lampiran_6 = $this->data->lampiran_6;
        $lampiran_6->storeAs('public/lampiran', $lampiran_6->hashName());

        $lampiran_7 = $this->data->lampiran_7;
        $lampiran_7->storeAs('public/lampiran', $lampiran_7->hashName());

        $lampiran_8 = $this->data->lampiran_8;
        $lampiran_8->storeAs('public/lampiran', $lampiran_8->hashName());

        $lampiran_9 = $this->data->lampiran_9;
        $lampiran_9->storeAs('public/lampiran', $lampiran_9->hashName());

        $lampiran_10 = $this->data->lampiran_10;
        $lampiran_10->storeAs('public/lampiran', $lampiran_10->hashName());

        $lampiran_11 = $this->data->lampiran_11;
        $lampiran_11->storeAs('public/lampiran', $lampiran_11->hashName());

        $lampiran_12 = $this->data->lampiran_12;
        $lampiran_12->storeAs('public/lampiran', $lampiran_12->hashName());
        dd('ok');
    }
}
