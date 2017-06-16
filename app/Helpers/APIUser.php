<?php 
namespace App\Helpers;
use Illuminate\Http\Request;
use DB,File,Auth,App,Session;
class APIUser {
    // get optionUser
    public static function getOption($user_id = 0)
    {
        $users = App\User::get();
        foreach ($users as $key => $user){
            $selected = $user->id == $user_id ? 'selected' : '';
            echo '<option '.$selected.' value="'.$user->id.'">'.$user->name.'</option>';
        }
    }
}