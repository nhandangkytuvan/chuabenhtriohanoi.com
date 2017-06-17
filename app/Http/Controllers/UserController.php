<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB,File,Auth,App,Session,Hash;
class UserController extends Controller
{
    // validate
    protected $rules_forget = [
        'password_old' => 'required',
        'password_new' => 'required|min:6|confirmed',
        'password_new_confirmation' => 'required|min:6',
    ];
    protected $messages_forget = [
        'password_old.required' => 'Nhập password cũ của bạn.',
        'password_new.required' => 'Nhập password mới của bạn.',
        'password_new_confirmation.required' => 'Nhập lại password mới của bạn.',
        'password_new.confirmed' => 'Passowrd không khớp.',
    ];

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        return view('users.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        foreach ($user->fillable as $key => $value) {
            if($request->has($value)){
                $user->$value = $request->input($value);
            }
        }
        $user->save();
        return redirect('users/'.$user->id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
    ///
    public function editPassword(Request $request)
    {
        if($request->isMethod('post')){
            $user = Auth::user();

            $this->validate($request,$this->rules_forget,$this->messages_forget);
            if(Hash::check($request->input('password_old'),$user->password)){
                $user->password = Hash::make($request->input('password_new'));
                $user->save();
                //Session::flush();
                //Session::flash('info','Đăng nhập lại.');
                //return redirect('login');
                Session::flash('success','Sửa Password thành công :v');
                return back();
            }else{
                Session::flash('error','Password cũ không đúng :(');
                return back();
            }

        }else{
            return view('users.editPassword');
        }
    }
    //
}
