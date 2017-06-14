<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon;
use Jenssegers\Agent\Agent;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(){    
        $agent = new Agent();
        if($agent->isDesktop()){        
            return view('home');
        }else{
            return view('homeMobile');
        }
    }
}