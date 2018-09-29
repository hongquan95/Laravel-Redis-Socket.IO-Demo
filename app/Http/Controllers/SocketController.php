<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use LRedis;
// use Request;

class SocketController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('socket');
    }

    public function writeMessage()
    {
        return view('message');
    }

    public function sendMessage(Request $request)
    {

        $redis = LRedis::connection();
        // dd($redis);
        $redis->publish('message', $request->message);
        return redirect()->back();
    }
}
