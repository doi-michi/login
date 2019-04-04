<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index(Request $request){
      return view('login',['msg'=>'ログインしてください']);
  }

  public function post(Request $request){

    if ($_POST['name']=='name'&& $_POST['email']=='email@example.com'&& $_POST['pass']=='password'){
      return view('home',['name'=>$request->name]);
  }
  else{
    return view('login',['msg'=>'入力に間違いがあります。再度ログインし直してください。']);
  }
  }
 
  
}


