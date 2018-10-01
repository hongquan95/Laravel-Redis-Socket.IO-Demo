<?php
namespace App;
use App\Notify;

class MailOnly implements Notify
{
    protected $mail;
    protected $notify;

    public function __construct(Notify $notify, MailAdapter $mail)
    {
        $this->notify = $notify;
        $this->mail = $mail;
    }
    public function send($subject){
        $this->notify->send($subject);
        $this->mail->send($subject);
    }
}
