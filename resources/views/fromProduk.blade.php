{{-- @extends('tampilanAdmin')
@section('content')\
@if (count($errors)>0)
   @foreach ( $errors ->all() as $error )
        {{ $error }}
   @endforeach
@endif --}}
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Input Produk</title>
                   
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>



        <body>
        {{-- <h2 class="fw-bold text-center">Input Portopolio</h2> --}}
        {{-- <form action="{{ url('admin/create')}}" method="post" enctype="multipart/form-data"> --}}
        <form action="{{ $action }}" method="post" enctype="multipart/form-data">
            {{-- <form action="{{ url('portopolio/create')}}" method="post" enctype="multipart/form-data"> --}}
            @csrf
            <div class="row">
                <div class="col-3">

                </div>
                <div class="col-6 ">
                  <div class="container-fluid p-3 mt-5">
                    <form action="">
                        <h2 class="fw-bold text-center">PRODUK</h2>

                        <div class="col-mb-3">
                            <label for="" class="form-label">Kode Produk</label>
                            <input type="text" name="kdproduk" class="form-control" value="{{ $produk->kdproduk}}"  placeholder="Masukan kode produk">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Nama Produk</label>
                            <input type="text" name="namaproduk" class="form-control" value="{{ $produk->namaproduk}}"  placeholder="Masukan nama produk">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Merk</label>
                            <input type="text" name="merk" class="form-control" value="{{ $produk->merk}}"  placeholder="Masukan merk">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Jenis Produk</label>
                            <input type="text" name="jenisproduk" class="form-control" value="{{ $produk->jenisproduk}}"  placeholder="Masukan jenis produk">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Harga</label>
                            <input type="text" name="harga" class="form-control" value="{{ $produk->harga}}"  placeholder="Masukan harga">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Stok</label>
                            <input type="text" name="stok" class="form-control" value="{{ $produk->stok}}"  placeholder="Masukan stok">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Kategori</label>
                            <input type="text" name="kategori" class="form-control" value="{{ $produk->kategori }}"  placeholder="Masukan kategori">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" value="{{ $produk->deskripsi}}" placeholder="Masukan deskripsi">
                        </div>
                        <div class="col-mb-3">
                            <label for="" class="form-label">Foto</label>
                            <input type="file" name="foto" id="foto" class="form-control" value="{{ $produk->foto}}" placeholder="Masukan foto">
                        </div>
                        <div class="pt-3">
                            <input type="submit" value="Simpan" class="btn btn-primary">
                        </div>
                    </form>
                </div>
                </div>
                <div class="col-3">

                </div>
            </div>
        </form>   

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   
    </body>
    </html>
{{-- @endsection --}}




