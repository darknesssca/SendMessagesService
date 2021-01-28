<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMessagesRequest;
use App\Jobs\SendMessageJob;

class SendMessagesController extends Controller
{
    public function sendMessages(SendMessagesRequest $request)
    {
        $fields = $request->validated();

        foreach ($fields['to'] as $id) {
            $params = [
                'to' => $id,
                'message' => $fields['message']
            ];

            SendMessageJob::dispatch($params)->onQueue('sendMessage');
        }
    }
}
