<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Models\User;


class UserController extends Controller
{
    //
    // function show(){
    //     return view('login');
    // }

    function auth(Request $request){
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            return redirect()->intended('template');
        }
        return redirect()->back();

    }

    function daftar(){
        return view('register');
    }

    function create(Request $request){

        $validate = $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'password'=> 'required|min:5'
        ]);

        $validate['password'] = bcrypt($request->password);

        User::create($validate);

        return redirect('login');
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }
}
