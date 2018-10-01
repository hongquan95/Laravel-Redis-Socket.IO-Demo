<?php
namespace App;
use App\Notify;

class SmsAdapter implements Notify
{
    protected $notify;
    protected $sms;

    public function __construct(Notify $notify, SmsAdd $sms)
    {
        $this->notify = $notify;
        $this->sms = $sms;
    }
    public function send($subject){
        $this->notify->send($subject);
        $this->sms->send($subject);
    }
}
