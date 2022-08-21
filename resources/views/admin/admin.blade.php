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
            <a class="nav-link active ms-2" aria-current="page" href="/home">{{ auth()->User()->name }}</a>
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
                  <li><a class="dropdown-item" href="#"><i class="fas fa-id-card" style="color: #0275d8"></i>{{ auth()->User()->name }}</a></li>
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
<div class="admin">
  <div class="container">
      <div class="judul text-center mt-4">
          <h2 style="color: #0275d8">Admin Panel</h2>
          <p>Change , Updated , Delet Only In This Area</p>
      </div>

      <div class="row mt-5">

          <div class="col-sm-6 col-md-6">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button id="menu" class="btn btn-primary" type="button">Panel Menu's</button>
              </div>
          </div>

          <div class="col-sm-6 col-md-6">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button id="gambarr" class="btn btn-primary" type="button">Panel Galeries</button>
              </div>
          </div>

      </div>

      <div class="melayang"  style="position: relative; width:100%;">
      <div class="row mt-5 menu" style="position:absolute; top:0; width:100%">
          <div class="col-12">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end justify-content-sm-end mb-2">
                <a href="/tambah"><button class="btn btn-primary me-md-2" type="button"><i class="fas fa-plus"></i> Tambah</button></a>
              </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Name</th>
                    <th scope="col">Deskription</th>
                    <th scope="col">Price</th>
                    <th scope="col">Setting</th>
                  </tr>
                </thead>
                <tbody>

                  <div class="hilamg" style="display: none">
                    {{ $i=1 }}
                  </div>

                  @foreach ($data as $d)
              
                  <tr>
                    <th scope="row">{{ $i++; }}</th>
                    <td>{{ $d->gambar }}</td>
                    <td>{{ $d->judul }}</td>
                    <td>{{ $d->body }}</td>
                    <td>{{ $d->harga }}</td>
                    <td>
                        <a href="/delet"><i class="fas fa-trash-alt" style="color: red"  style="cursor: pointer"></i></a>
                        <a href="/update"><i class="fas fa-cog"  style="cursor: pointer; margin-left:10px;"></i></a>
                    </td>
                  </tr>

                  @endforeach

                </tbody>
              </table>
          </div>
      </div>

      
      <div class="row mt-5 gambarr" style="position:absolute; top:0;width:100%">
        <div class="col-12">
          <div class="d-grid gap-2 d-md-flex justify-content-md-end justify-content-sm-end mb-2">
              <a href="/tambahgaleries"><button class="btn btn-primary me-md-2" type="button"><i class="fas fa-plus"></i> Tambah</button></a>
            </div>
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Username</th>
                  <th scope="col">gambar</th>
                  <th scope="col">Setting</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <th scope="row">1</th>
                  <td>suryadwipayanaa</td>
                  <td>Ni Gambar</td>
                  <td>
                      <a href="/delet"><i class="fas fa-trash-alt"  style="cursor: pointer"></i></a>
                      <a href="/updategaleries"><i class="fas fa-cog"  style="cursor: pointer; margin-left:10px;"></i></a>
                  </td>
                </tr>

                <tr>
                  <th scope="row">1</th>
                  <td>suryadwipayanaa</td>
                  <td>Ni Gambar</td>
                  <td>
                      <a href="/delet"><i class="fas fa-trash-alt"  style="cursor: pointer"></i></a>
                      <a href="/updategaleries"><i class="fas fa-cog"  style="cursor: pointer; margin-left:10px;"></i></a>
                  </td>
                </tr>

              </tbody>
            </table>
        </div>
    </div>
  </div>
  </div>
  </div>
@endsection
