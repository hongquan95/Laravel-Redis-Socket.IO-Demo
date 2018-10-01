<?php
namespace App;
use App\Notify;
use App\SmsAdapter;

class Sms implements SmsAdapter
{
    public function send($subject)
    {
        return "You: sms: $subject..";
    }

}
