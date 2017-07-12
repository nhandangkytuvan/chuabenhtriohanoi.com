<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('term/{id}',function($id){
	$posts = App\Post::select('id','name','description')->whereTermId($id)->limit(6)->get();
	foreach ($posts as $key => $post) {
		$post->description = APIPost::getDescription($post->description,22).'...';
	}
	return json_encode($posts);
});
// show post
Route::get('post/{id}',function($id){
	$post = App\Post::find($id);
	return json_encode($post);
});