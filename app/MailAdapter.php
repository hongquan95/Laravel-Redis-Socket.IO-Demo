<?php
namespace App;
use App\Notify;

interface MailAdapter
{
   public function send($subject);
}
