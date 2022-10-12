<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function logout(){
        $user = auth()->logout(); 
        return redirect('login');

    }

    public function loginaction(Request $request){
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
  
        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('Laravel8PassportAuth')->accessToken;
            return redirect('blank');
            // return response()->json(['token' => $token], 200);
        } else {
            return redirect('/login');
            // return response()->json(['error' => 'Unauthorised'], 401);
        }
    }
    
}
