<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    public function list(){
        $users = User::paginate(10);
        // $users = User::cursorPaginate(10);
        return view('users',['users'=>$users]);
    }

    public function userprofile(){
        $users = auth()->user();
        return view('userprofile',['users'=>$users]);
    }
}
