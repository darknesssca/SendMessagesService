<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMessagesRequest;

class SendMessagesController extends Controller
{
    public function sendMessages(SendMessagesRequest $request)
    {
        $fields = $request->validated();


        return '';
    }
}
