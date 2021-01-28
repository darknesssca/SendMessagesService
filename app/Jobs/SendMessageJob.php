<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class SendMessageJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Execute the job.
     *
     * @param array $params
     * @return void
     * @throws \Exception
     */
    public function handle(array $params)
    {
        $response = Http::post('https://send.message/api/send', $params);

        if ($response->status() == 500) {
            throw new \Exception('Не удалось отправить сообщение');
        }
    }
}
