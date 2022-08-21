@extends('layout.layout')

@section('navbar')
    @include('navbar.navbar')
@endsection

@section('header')
<div class="container">
    <div class="bungkus" style="position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); width:30%;">

            <div class="judul text-center">
                <div class="logo mb-3" style="background-color:#0275d8; width:20%; padding:10px 20px; border-radius:10px; margin:0 auto;">
                    <i class="fas fa-utensils" style="color: #ffff; font-size:3em;"></i>
                </div>
                <h3 style="color:#0275d8; letter-spacing:2px;"> Update Data Galeries</h3>
                <p>" Harap Check Sebelum Submit</p>
            </div>
            <form>
            <div class="col-sm-12 col-md-12">
                    <div class="form-floating mb-3">
                            <input type="price" class="form-control" name="username" id="username" placeholder="suryadwipayanaa">
                            <label for="username">Username</label>
                    </div>
                    <div class="gambar mb-3">
                        <input type="file" class="form-control" name="gambar" id="gambar">
                 </div>

                    <div class="d-grid gap-2 mt-3 mb-3 mx-auto">
                        <button class="btn btn-primary" type="button">Tambah</button>
                      </div>    
                      <a href="/admin" style="text-decoration: none; text-align:center;"><p>Back to admin panel</p></a>
                      <p class="text-center">
                        © 2017–2021
                      </p>
             </div>
            </form>
        
    </div>
</div>
@endsection