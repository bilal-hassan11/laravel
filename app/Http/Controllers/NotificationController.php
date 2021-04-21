<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{

    public function index(){

        return view('sendSms');
    }

    public function sendSmsNotification(){
        
        $basic  = new \Vonage\Client\Credentials\Basic("5c877b61", "vkfR4zaPE3By6Ldf");
        $client = new \Vonage\Client($basic);

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS("923461315205", BRAND_NAME, 'Testing!')
        );
        
        $message = $response->current();
        
        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
        
    }
}
