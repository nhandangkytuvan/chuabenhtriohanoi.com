<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon;
use Jenssegers\Agent\Agent;
use DB,File,Auth,App,Session;
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
        $post_clicks = App\Post::whereIn('type',[1,2,3,4,5])->limit(6)->inRandomOrder()->get();
        $post_kythuats = App\Post::whereTermId(18)->limit(5)->inRandomOrder()->get();
        $post_shares = App\Post::limit(5)->inRandomOrder()->get();
        $agent = new Agent();
        if($agent->isDesktop()){        
            return view('home',['post_clicks'=>$post_clicks,'post_kythuats'=>$post_kythuats,'post_shares'=>$post_shares]);
        }else{
            return view('homeMobile');
        }
    }
}
