@extends('layout.layout')

@section('header')

    <div class="container">
        <div class="bungkus" style="position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); width:30%;">
    
                <div class="judul text-center">
                    <div class="logo mb-3" style="background-color:#0275d8; width:20%; padding:10px 20px; border-radius:10px; margin:0 auto;">
                        <i class="fas fa-utensils" style="color: #ffff; font-size:3em;"></i>
                    </div>
                    <h3 style="color:#0275d8; letter-spacing:2px;"> Please Sign In</h3>
                    <p>" Dont Forget To Sign Out " </p>
                </div>

                @if(session()->has('sukses'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                  {{ session('sukses') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{ session('loginError') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <form method="POST" action="">

                  @csrf

                <div class="col-sm-12 col-md-12">
                        <div class="form-floating mb-3">
                                <input type="name" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="suryadwipayanaa" autofocus required>
                                <label for="username">Username</label>

                                @error('username')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror

                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            <label for="password">Password</label>
                    </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                              Remember me
                            </label>
                          </div>
                        <div class="d-grid gap-2 mt-3 mb-3 mx-auto">
                            <button class="btn btn-primary" type="submit">Sign In</button>
                          </div>    
                          <a href="/registrasi" style="text-decoration: none; text-align:center;"><p>Didn't Have Account? Registration Please!!</p></a>
                          <p class="text-center">
                            © Kelompok –2022
                          </p>
                 </div>
                </form>
            
        </div>
    </div>
@endsection