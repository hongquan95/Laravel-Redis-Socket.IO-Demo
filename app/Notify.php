<?php
namespace App;

interface Notify
{
    public function send($subject);
}
