@extends('layout.layout')

@section('navbar')
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/home" style="letter-spacing: 2px; font-size:2em;"><i class="fas fa-utensils"></i> Restaurant</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active ms-2" aria-current="page" href="/home">Mr.Smith Collage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active ms-2" aria-current="page" href="/menu">Admin</a>
          </li>
          <li class="nav-item ms-2 me-5" style="cursor: pointer; text-align:center;">
            <div class="dropdown" style="position: absolute; display:flex; justify-content:center;">
                <div class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="icons-profile" style="height: 40px; width:40px; background-color:#fff; border-radius:50%;">
                        <i class="fas fa-user-tie" style="font-size: 1.8em; height:40px; color:#0275d8"></i>
                    </div>
                </div>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#"><i class="fas fa-id-card" style="color: #0275d8"></i> Mr.Smith Collage</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-cogs" style="color: #0275d8"></i> Setting</a></li>
                  <hr style="border: 0.5px #0275d8 solid">
                  <li><a class="dropdown-item" href="#"><i class="bi bi-arrow-bar-left" style="color: #0275d8"></i> Logout</a></li>
                </ul>
              </div>
          </li>

        </ul>
      </div>
    </div>
  </nav>
@endsection

@section('header')
<div class="container">
    <div class="bungkus" style="position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); width:30%;">

            <div class="judul text-center" style="margin-top: 200px">
                <div class="logo mb-3" style="background-color:#0275d8; width:20%; padding:10px 20px; border-radius:10px; margin:0 auto;">
                    <i class="fas fa-utensils" style="color: #ffff; font-size:3em;"></i>
                </div>
                <h3 style="color:#0275d8; letter-spacing:2px;"> Update Data Menu's</h3>
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
                    <div class="form-floating mb-3">
                        <input type="name" class="form-control" name="name" id="name" placeholder="suryadwipayanaa">
                        <label for="name">Nama</label>
                     </div>

                     <div class="form-floating mb-3">
                        <textarea class="form-control" name="deskripsion" placeholder="Deskripsion" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Deskripsion</label>
                      </div>

                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="price" id="price" placeholder="suryadwipayanaa">
                        <label for="price">Rp. </label>
                     </div>

                    <div class="d-grid gap-2 mt-3 mb-3 mx-auto">
                        <button class="btn btn-primary" type="button">Updated</button>
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