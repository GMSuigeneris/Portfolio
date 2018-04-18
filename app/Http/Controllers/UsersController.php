<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function alpha($id){
        $user = User::findorFail($id);
        return view('users.edit',['user'=>$user]);
    }
}
