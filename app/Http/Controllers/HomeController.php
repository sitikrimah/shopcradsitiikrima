<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class HomeController extends Controller
{
    //
    function show(){
        $data['produk'] = Produk::all();
        return view('home',$data);
    }
   
}
