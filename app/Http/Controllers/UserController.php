<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    function login(Request $req)
    {
        $users=User::where(['email'=>$req->email])->first();

        if(!$users || !\Hash::check($req->password, $users->password))
        {
            return "User Name Or Password is invalid";
        }
        else
        {
            $req->session()->put('users', $users);
            return redirect('/');

        }
    }
}
