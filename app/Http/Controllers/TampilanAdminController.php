<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TampilanAdminController extends Controller
{
    //
    function show(){
        return view('tampilanAdmin');
    } 
       function create (Request $req){
        portofolio::create([
            'nama'=>$req->nama,
            'kategori'=>$req->kategori,
            'deskripsi'=>$req->deskripsi,
            'foto' => $req->file('foto')->store('foto')
            // 'foto'=>$req->foto
        ]);
        return redorect('tampilanAdmin');
        // return redirect('');
    }
}
