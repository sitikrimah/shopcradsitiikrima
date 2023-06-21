<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Produk;

class ProdukController extends Controller
{
    //
    function show(){
        $data['produk'] = Produk::all();
        return view('produk',$data);
    }

    function add(){
        $data=[
            'action'=>url('produk/create'),
            'tombol'=>'Simpan',
            'produk'=>(object)[
                'kdproduk'=>'',
                'namaproduk'=>'',
                'jenisproduk'=>'',
                'merk'=>'',
                'harga'=>'',
                'stok'=>'',
                'kategori'=>'',
                'deskripsi'=>'',
                'foto'=>'',
            ]
            ];
        return view('fromproduk',$data);
    }
    function create(Request $req){

        // $namafile = $req->nis.".".$req->file('foto')->getClientOriginalExtension();

        // $this->validate($req, [
        //     'nis' => 'required|min:5|numeric',
        //     'nama' => 'required|string|max:10',
        //     'foto' => 'mimes:jpg,png'
        // ]);

        Produk::create([
            'kdproduk' => $req->kdproduk,
            'namaproduk' => $req->namaproduk,
            'jenisproduk' => $req->jenisproduk,
            'merk' => $req->merk,
            'harga' => $req->harga,
            'stok' => $req->stok,
            'kategori' => $req->kategori,
            'deskripsi' => $req->deskripsi,
            'foto' => $req->file('foto')->store('foto')
        ]);

        return redirect('produk');

    }
      function hapus($kdproduk){
          $produk = Produk::where('kdproduk', $kdproduk)->delete();
        //   $produk->delete();
        //   Storage::delete($produk->foto );
          return redirect('produk');
      }

      function edit($kdproduk){
        $data['produk'] = Produk::find($kdproduk);
        $data['action'] = url('produk/update'). '/' .$data['produk']->kdproduk;
        $data['tombol'] = 'Update';
        return view('fromproduk', $data);

        // $data['produk'] = Produk::where('id','$id')->get();
    }
    

      function update(Request $req){
        Produk::where('kdproduk',$req->kdproduk)->update([
            'kdproduk' => $req->kdproduk,
            'namaproduk' => $req->namaproduk,
            'jenisproduk' => $req->jenisproduk,
            'merk' => $req->merk,
            'harga' => $req->harga,
            'stok' => $req->stok,
            'kategori' => $req->kategori,
            'deskripsi' => $req->deskripsi,
            'foto' => $req->file('foto')->store('foto')

        ]);
        return redirect('produk');
       }

    //    function cari(Request $req){

    //     $data['portopolio'] = portopolio::where('nama','like',$req->cari. "%")
    //     ->orwhere('kategori','like',$req->cari. "%")
    //     ->orwhere('deskripsi','like',$req->cari. "%")
    //     ->paginate();

    //     $data['cari'] = $req->cari;
    //     return view('portopolio',$data);
    //   }
}

