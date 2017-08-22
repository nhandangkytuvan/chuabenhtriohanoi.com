<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/',function(){return view('welcome');});
// home
Route::get('/','HomeController@home');
// auth
Auth::routes();
Route::get('users/editPassword','UserController@editPassword');
Route::post('users/editPassword','UserController@editPassword');
// backend
// terms
Route::resource('terms', 'TermController');
Route::get('terms/{term}/delete','TermController@delete');
// posts
Route::resource('posts', 'PostController');
Route::get('posts/{post}/delete','PostController@delete');
// configs
Route::resource('configs', 'ConfigController');
Route::get('configs/{config}/delete','ConfigController@delete');
// users
Route::resource('users', 'UserController');
// medias
Route::resource('medias', 'MediaController');
Route::get('medias/{media}/delete','MediaController@delete');
// mails
Route::post('sendmail','MyMailController@sendmail');
//
Route::get('mydb/terms','MydbController@terms');
Route::get('mydb/posts','MydbController@posts');
Route::get('mydb/medias','MydbController@medias');
Route::get('mydb/users','MydbController@users');

// ChuyenDe
Route::get('/chuyen-de',function(){return view('chuyende');});
Route::get('/chuyen-de-2',function(){return view('chuyende2');});
Route::get('/chuyen-de-mobile',function(){return view('chuyendeMobile');});
Route::get('/chuyen-de-mobile-2',function(){return view('chuyendeMobile2');});
Route::get('/chuyen-de-mobile-3',function(){return view('chuyendeMobile3');});
// Term
Route::get('/{term_link?}', 'TermController@view')->where(['term_link'=>'[-a-z0-9]+']);
// Post
Route::get('/dia-chi-phong-kham.html',
	function(){
		$agent = new Jenssegers\Agent\Agent();
		if($agent->isDesktop()){
			$post_taobons = App\Post::whereIn('type',[1,2,3,4,5])->whereTermId(17)->limit(4)->get();
        	$post_tructrangs = App\Post::whereIn('type',[1,2,3,4,5])->whereIn('term_id',[6,8,9,10])->limit(4)->get();
			return view('posts.address',['post_taobons'=>$post_taobons,'post_tructrangs'=>$post_tructrangs]);
		}else{
			return view('posts.addressMobile');
		}
	}
);
Route::get('/{post_link?}.html', 'PostController@view')->where(['post_link'=>'[-a-z0-9]+']);