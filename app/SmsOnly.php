<?php
namespace App;
use App\Notify;

class SmsOnly implements Notify
{
    protected $sms;
    protected $notify;

    public function __construct(Notify $notify, SmsAdapter $sms)
    {
        $this->notify = $notify;
        $this->sms = $sms;
    }
    public function send($subject){
        $x = $this->notify->send($subject);
        $y = $this->sms->send($subject);
        return $x . $y;
    }
}
