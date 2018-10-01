<?php
namespace App;
use App\Notify;

class Sms implements Notify
{
    public function send($subject)
    {
        return "You: sms: $subject..";
    }

}
