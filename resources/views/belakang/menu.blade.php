<div class="menu">
    <div class="container">
        <div class="menus text-center mt-5">
        <h2 style="color: #0275d8; letter-spacing:2px">Favorite Menu'S</h2>
        <p>" all Of Our Menu'S</p>
    </div>

    <div class="search col-sm-10 col-md-6 m-auto">
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
          </form>
    </div>

    <div class="row">
        @foreach ( $data as $d) 

    <div class="col-sm-6 col-md-4 mt-3">
        <div class="card">
            <img src="{{ $d->gambar }}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $d->judul }}</h5>
            <p class="card-text">{{ $d->body }}</p>
            <p>{{ $d->harga }}</p>
            <a href="#" class="btn btn-primary">Buy It</a>
            </div>
        </div>
    </div>

    @endforeach

</div>
</div>
</div>