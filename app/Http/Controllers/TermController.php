<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTerm;
use App\Http\Requests\UpdateTerm;
use App\Term;
use DB,File,Auth,App,Session;
use Jenssegers\Agent\Agent;

class TermController extends Controller
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
    public function index()
    {
        $terms = Term::get();
        return view('terms.index',['terms'=>$terms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Term::class);
        $terms = Term::get();
        return view('terms.create',['terms'=>$terms]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTerm $request)
    {
        $term = new Term;
        $term->user_id = Auth::id();
        foreach ($term->fillable as $key => $value) {
            if($request->has($value)){
                $term->$value = $request->input($value);
            }
            if($request->hasFile($value)){
                $file = $request->file($value);
                $file_name = time().'.'.$file->extension();
                $file->move(public_path('upload'),$file_name);
                $term->$value = $file_name;
            }
        }
        //json orther
        $input = $request->except(array_merge(['_token','_method'],$term->fillable));
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
        $term->orther = json_encode($orther);
        // alias
        $term->alias = str_slug($term->name,'-');
        // save
        $term->save();
        // notifi
        Session::flash('success','Lưu thành công :v');
        return redirect('terms/'.$term->id.'/edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function show(Term $term)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function edit(Term $term)
    {
        $terms = Term::get();
        return view('terms.edit',['term'=>$term,'terms'=>$terms]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTerm $request, Term $term)
    {
        $this->authorize('update', $term);
        foreach ($term->fillable as $key => $value) {
            if($request->has($value)){
                $term->$value = $request->input($value);
            }
            if($request->hasFile($value)){
                $file = $request->file($value);
                $file_name = time().'.'.$file->extension();
                $file->move(public_path('upload'),$file_name);
                $term->$value = $file_name;
            }
        }
        //json orther
        $input = $request->except(array_merge(['_token','_method'],$term->fillable));
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
        $term->orther = json_encode($orther);
        // alias
        $term->alias = str_slug($term->name,'-');
        // save
        $term->save();
        // notifi
        Session::flash('success','Sửa thành công :v');
        return redirect('terms/'.$term->id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function destroy(Term $term)
    {
        $this->authorize('delete', $term);
        $term->delete();
        $term->child()->update(['term_id'=>0]);
        $term->post()->update(['term_id'=>0]);
        $term->media()->update(['term_id'=>0]);
        File::delete(public_path('upload\\'.$term->avatar));
        DB::statement('ALTER TABLE terms AUTO_INCREMENT = 1');
        // notifi
        Session::flash('success','Xóa thành công :v');
        return redirect('terms');
    }
    //
    //
    public function delete(Term $term)
    {
        return view('terms.delete',['term'=>$term]);
    }
    // show online
    public function view($term_link,Request $request){
        $array_link = explode('-',$term_link);
        $id = end($array_link);
        $term = Term::find($id);
        if(!$term){
            return redirect('/');
        }
        // -----------
        $agent = new Agent();
        if($agent->isDesktop()){

            $pcBanner = [
                2=>'tri-ngoai.png',
                3=>'tri-noi.png',
                4=>'tri-hon-hop.png',
                6=>'apxe-hau-mon.png',
                7=>'ngua-hau-mon.png',
                8=>'polyp-hau-mon.png',
                9=>'dau-hau-mon.png',
                10=>'hau-mon-co-vat-the-la.png',
                12=>'ro-hau-mon.png',
                13=>'nut-ke-hau-mon.png',
                14=>'sa-truc-trang.png',
                16=>'đai-tien-ra-mau.png',
                17=>'tao-bon.png'
            ];

            $post_taobons = App\Post::whereIn('type',[1,2,3,4,5])->whereTermId(17)->limit(4)->get();
            $post_tructrangs = App\Post::whereIn('type',[1,2,3,4,5])->whereIn('term_id',[6,8,9,10])->limit(4)->get();
            return view('terms.view',['term'=>$term,'post_taobons'=>$post_taobons,'post_tructrangs'=>$post_tructrangs,'pcBanner'=>$pcBanner]); 
        }else{
            return view('terms.viewMobile',['term'=>$term]);
        }
    }
}
