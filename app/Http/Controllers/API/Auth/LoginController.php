<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    //
     public function login(Request $request)
    {
        # code...
      if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
       $token= Auth::user()->createToken('phone');
       return ['token'=>$token->plainTextToken];
      }
      return response(['message'=>'wrong email or password'],401);
    }
}
