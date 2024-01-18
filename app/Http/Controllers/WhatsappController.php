<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class WhatsappController extends Controller
{
    public function send(Request $request)
    {
        try {
            $twilio = new Client(env('TWILIO_ACCOUNT_SID'), env('TWILIO_AUTH_TOKEN'));

            $message = $twilio->messages->create("whatsapp:".$request->to, [
                'from' => "whatsapp:".env('twilio_whatsapp_number'),
                'body' => $request->message,
            ]);

            dd($message);
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
