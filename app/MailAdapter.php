<?php
namespace App;
use App\Notify;

class MailAdapter implements Notify
{
    protected $notify;
    protected $mail;

    public function __construct(Notify $notify, MailAdd $mail)
    {
        $this->notify = $notify;
        $this->mail = $mail;
    }
    public function send($subject){
        $this->notify->send($subject);
        $this->mail->send($subject);
    }
}
