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
        $agent = new Agent();
        if($agent->isDesktop()){        
            // get post home
            $post_clicks = App\Post::whereIn('type',[1,2,3,4,5])->limit(6)->inRandomOrder()->get();
            $post_kythuats = App\Post::whereTermId(18)->limit(5)->inRandomOrder()->get();
            $post_shares = App\Post::limit(5)->inRandomOrder()->get();
            $post_taobons = App\Post::whereIn('type',[1,2,3,4,5])->whereTermId(17)->limit(4)->get();
            $post_tructrangs = App\Post::whereIn('type',[1,2,3,4,5])->whereIn('term_id',[6,8,9,10])->limit(4)->get();
            // get post term 
            // chuyen khoa tri
            $post_chuyenkhoatris = App\Post::whereIn('term_id',[2,3,4])->whereIn('type',[1,2,3,4,5])->limit(7)->inRandomOrder()->get();
            $post_trinois = App\Post::whereTermId(3)->whereIn('type',[1,2,3,4,5])->limit(7)->get();
            $post_tringoais = App\Post::whereTermId(2)->whereIn('type',[1,2,3,4,5])->limit(7)->get();
            $post_trihonhops = App\Post::whereTermId(4)->whereIn('type',[1,2,3,4,5])->limit(7)->get();
            // benh hau mon
            $post_haumons = App\Post::whereIn('term_id',[6,7,8,9,10])->whereIn('type',[1,2,3,4,5])->limit(7)->inRandomOrder()->get();
            $post_apxes = App\Post::whereTermId(6)->whereIn('type',[1,2,3,4,5])->limit(7)->get();
            $post_nguarats = App\Post::whereTermId(7)->whereIn('type',[1,2,3,4,5])->limit(7)->get();
            $post_polyps = App\Post::whereTermId(8)->whereIn('type',[1,2,3,4,5])->limit(7)->get();
            $post_daus = App\Post::whereTermId(9)->whereIn('type',[1,2,3,4,5])->limit(7)->get();
            $post_vathes = App\Post::whereTermId(10)->whereIn('type',[1,2,3,4,5])->limit(7)->get();
            // chan thuong 
            $post_chanthuongs = App\Post::whereIn('term_id',[12,13,14])->whereIn('type',[1,2,3,4,5])->limit(7)->inRandomOrder()->get();
            $post_ros = App\Post::whereTermId(12)->whereIn('type',[1,2,3,4,5])->limit(7)->get();
            $post_nuts = App\Post::whereTermId(13)->whereIn('type',[1,2,3,4,5])->limit(7)->get();
            $post_sas = App\Post::whereTermId(14)->whereIn('type',[1,2,3,4,5])->limit(7)->get();
            // di ra mau
            $post_diramaus = App\Post::whereTermId(16)->whereIn('type',[1,2,3,4,5])->limit(7)->get();
            //
            $data = [
                'post_clicks'=>$post_clicks,
                'post_kythuats'=>$post_kythuats,
                'post_shares'=>$post_shares,
                'post_taobons'=>$post_taobons,
                'post_tructrangs'=>$post_tructrangs,
                //
                'post_chuyenkhoatris'=>$post_chuyenkhoatris,
                'post_trinois'=>$post_trinois,
                'post_tringoais'=>$post_tringoais,
                'post_trihonhops'=>$post_trihonhops,
                //
                'post_haumons'=>$post_haumons,
                'post_apxes'=>$post_apxes,
                'post_nguarats'=>$post_nguarats,
                'post_polyps'=>$post_polyps,
                'post_daus'=>$post_daus,
                'post_vathes'=>$post_vathes,
                //
                'post_chanthuongs'=>$post_chanthuongs,
                'post_ros'=>$post_ros,
                'post_nuts'=>$post_nuts,
                'post_sas'=>$post_sas,
                //
                'post_diramaus'=>$post_diramaus,
            ];
            return view('home',$data);
        }else{
            return view('homeMobile');
        }
    }
}
