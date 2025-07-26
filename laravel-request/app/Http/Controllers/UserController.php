<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    // function abc(Request $req){
    //     echo "hello wolrd";
    //     echo "<br><br>";
    //     echo $req->method();
    //     echo "<br><br>";
    //     echo $req->url();
    //     echo "<br><br>";
    //     echo $req->path();
    //     echo "<br><br>";
    //     echo $req->input('name');
    //     echo "<br><br>";
    //     echo $req->email;
    //     echo "<br><br>";       
    //     print_r($req->input());
    //     echo "<br><br>";       
    //     echo $req->input('_token');
    //     echo "<br><br>";       
    //     echo $req->ip();
    // }
    // function login(Request $req){
    //   $req->session()->put('name',$req->input('name'));
    //    $req->session()->put('allsession',$req->input());
    //   return redirect('profile');
    // }
    // function logout(Request $req){
    //     session()->pull('allsession');
    //     return redirect('profile');
    // }

    function login(Request $request){
    //  $request->session()->put('user',$request->input('name')); 
    $request->session()->put('allfield',$request->input()); 
     return redirect('profile');
    }

    function logout(Request $request){
      session()->pull('allfield');
       return redirect('profile');
    }
}
