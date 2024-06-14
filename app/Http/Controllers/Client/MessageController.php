<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MessageController extends Controller
{

    public function store(Request $request)
    {
        try {
            $valid_message = $request->validate([
                'fullname' => 'required|min:3',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
            ]);

            Message::create([
                'user_id' => User::first()->id,
                'sender_name' => $valid_message['fullname'],
                'sender_email' => $valid_message['email'],
                'subject' => $valid_message['subject'],
                'message' => $valid_message['message'],

            ]);

            return redirect('contact');
        } catch (\Throwable $th) {
            Log::channel('errorlog')->error($th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
