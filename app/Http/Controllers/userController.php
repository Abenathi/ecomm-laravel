<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class userController extends Controller
{
    //
    function login(Request $req)
    {
       $user =user::where(['email' =>$req->email])->first();
       if(!$user || !Hash::check($req->password, $user-> password))
       {
           return "invalid username of password";
       }
       else
       {
          $req->session()->put('user',$user);
          return redirect('/');
       }
    }
    function register(Request $req)
    {
          $user= new user;
          $user->name=$req->username;
          $user->email=$req->email;
          $user->password=Hash::make($req->password);
          $user->save();
          return redirect('/login');
    }
}
