<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notify;



class HomeController extends Controller
{
    public $notify;
    /**
     * Create a new controller instance.
     *
     *  @param Notify $notify Validate data request
     *
     * @return void
     */
    public function __construct(Notify $notify)
    {
        // $this->middleware('auth');
        $this->notify = $notify;
    }

    public function test($a)
    {
        return $this->notify->send($a);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
