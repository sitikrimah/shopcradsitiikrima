<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserAdminController extends Controller
{
    //
    function show(){
        return view('registerAdmin');
    }
}
