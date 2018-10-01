<?php
namespace App;
use App\Notify;

class Mail implements Notify
{
    public function send($subject)
    {
        return "You: mail: $subject..";
    }

}
