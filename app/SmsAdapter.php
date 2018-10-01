<?php
namespace App;
use App\Notify;

interface SmsAdapter
{
   public function send($subject);
}
