<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StorePost;
use App\Post;
use DB,File,Auth,App,Session;
use Jenssegers\Agent\Agent;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('view');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $terms = App\Term::get();
        $posts = Post::orderBy('id','desc');
        if($request->has('term_id')){
            $posts->whereTermId($request->input('term_id'));
        }
        if($request->has('name')){
            $posts->where('name','like','%'.$request->input('name').'%');
        }
        $posts = $posts->paginate(10);
        return view('posts.index',['posts'=>$posts,'terms'=>$terms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$this->authorize('create', Post::class);
        $terms = App\Term::get();
        return view('posts.create',['terms'=>$terms]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePost $request)
    {
        $post = new Post;
        $post->user_id = Auth::id();
        foreach ($post->fillable as $key => $value) {
            if($request->has($value)){
                $post->$value = $request->input($value);
            }
            if($request->hasFile($value)){
                $file = $request->file($value);
                $file_name = time().'.'.$file->extension();
                $file->move(public_path('upload'),$file_name);
                $post->$value = $file_name;
            }
        }
        //json orther
        $input = $request->except(array_merge(['_token','_method'],$post->fillable));
        $orther = [];
        foreach ($input as $key => $value) {
            if($request->has($key)){
                $orther[$key] = $request->input($key);
            }
            if($request->hasFile($key)){
                $file = $request->file($key);
                $file_name = time().'.'.$file->extension();
                $file->move(public_path('upload'),$file_name);
                $orther[$key] = $file_name;
            }
        }
        $post->orther = json_encode($orther);
        // alias
        $post->alias = str_slug($post->name,'-');
        // save
        $post->save();
        // notifi
        Session::flash('success','Lưu thành công :v');
        return redirect('posts/'.$post->id.'/edit'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $terms = App\Term::get();
        return view('posts.edit',['post'=>$post,'terms'=>$terms]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        foreach ($post->fillable as $key => $value) {
            if($request->has($value)){
                $post->$value = $request->input($value);
            }
            if($request->hasFile($value)){
                $file = $request->file($value);
                $file_name = time().'.'.$file->extension();
                $file->move(public_path('upload'),$file_name);
                $post->$value = $file_name;
            }
        }
        //json orther
        $input = $request->except(array_merge(['_token','_method'],$post->fillable));
        $orther = [];
        foreach ($input as $key => $value) {
            if($request->has($key)){
                $orther[$key] = $request->input($key);
            }
            if($request->hasFile($key)){
                $file = $request->file($key);
                $file_name = time().'.'.$file->extension();
                $file->move(public_path('upload'),$file_name);
                $orther[$key] = $file_name;
            }
        }
        $post->orther = json_encode($orther);
        // alias
        $post->alias = str_slug($post->name,'-');
        // save
        $post->save();
        // notifi
        Session::flash('success','Sửa thành công :v');
        return redirect('posts/'.$post->id.'/edit'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        $post->delete();
        File::delete(public_path('upload\\'.$post->avatar));
        DB::statement('ALTER TABLE posts AUTO_INCREMENT = 1');
        // notifi
        Session::flash('success','Xóa thành công :v');
        return redirect('posts');

    }
    //
    public function delete(Post $post)
    {
        return view('posts.delete',['post'=>$post]);
    }
    //
    public function view($post_link,Request $request){
        $array_link = explode('-',$post_link);
        $id = end($array_link);
        $post = Post::find($id);
        if(!$post){
            return redirect('/');
        }
        // -----------
        $agent = new Agent();
        if($agent->isDesktop()){
            return view('posts.view',['post'=>$post]); 
        }else{
            return view('posts.viewMobile',['post'=>$post]);  
        }
    }
}
