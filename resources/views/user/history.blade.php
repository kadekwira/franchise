<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kakkoi Gohan Franchise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">
  </head>
  <body id ="body">
    <nav class="navbar navbar-expand-lg fixed-top" id="nav">
      <div class="container">
          <a class="navbar-brand" href="#">
              <img src="{{ asset('images/logo_gohan.png') }}" alt="" style="width:200px;">
          </a>
          <div class="d-flex gap-5 align-items-center">
              <a href="/" class="nav-link fw-semibold fs-5"> Home</a>
              <a href="/" class="nav-link fw-semibold fs-5"> About</a>
              <a href="/" class="nav-link fw-semibold fs-5"> Paket</a>
              <div class="d-flex gap-2">
                  @if (Auth::check())
                      <div class="dropdown">
                          <img src="{{ asset('images/profile.png') }}"="dropdown-toggle" type="button"
                              data-bs-toggle="dropdown" aria-expanded="false" style="width: 40px"></img>
                          <ul class="dropdown-menu" style="margin-left:-50px;">
                              <li>
                                  <h6 class="dropdown-item fw-semibold">{{ auth()->user()->name }}</h6>
                              </li>
                              <li>
                                  <li><a class="dropdown-item" href="/history">Transaksi</a></li>
                              </li>
                              <li>
                                  <form action="/logout" class="dropdown-item ms-2 text-light w-75" method="POST">
                                      @csrf
                                      <input type="hidden" name="role" value="{{ auth()->user()->role }}">
                                      <button class="btn btn-danger text-light" type="submit">
                                          Logout
                                      </button>
                                  </form>
                              </li>
                          </ul>
                      </div>
                  @else
                      <a href="/daftar" class=" daftar" id="button">Daftar</a>
                      <a href="/login" class=" masuk" id="button">Masuk</a>
                  @endif
              </div>
          </div>
      </div>
    </nav>

    <div class="container" style="margin-top:100px">
      <h2>Transaksi</h2>
      <div class="d-flex flex-wrap gap-5 justify-content-center align-items-center">
        @foreach ($data as $item)    
        <div class="card" style="width: 23rem; margin-top:50px;">
          <div class="card-body">
            <h5 class="card-title">ID Transaksi : {{$item->id}}</h5>
            <p class="card-text">Pembelian Franchise Kakkoi Gohan <strong>Paket {{$item->paket}}</strong></p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Nama Pembeli : <span class="fw-semibold">{{ucfirst($item->user->name)}}</span></li>
            <li class="list-group-item">Qty : <span class="fw-semibold">{{$item->qty}}</span></li>
            <li class="list-group-item">Total : <span class="fw-semibold">@currency($item->total)</span></li>
            <li class="list-group-item">Status Pembayaran : 
              @if ($item->status_payment == 'unpaid')
                <span class="badge bg-danger">{{$item->status_payment}}</span>
              @else 
              <span class="badge bg-success">{{$item->status_payment}}</span>
              @endif
            </li>
            <li class="list-group-item">Status Transaksi : 
              @if ($item->status_transaksi == 'rejected')
                <span class="badge bg-danger">{{$item->status_transaksi}}</span>
              @elseif($item->status_transaksi == 'waiting')
              <span class="badge bg-warning">{{$item->status_transaksi}}</span>
              @else 
              <span class="badge bg-success">{{$item->status_payment}}</span>
              @endif
            </li>
          </ul>
          <div class="card-body">
            @if($item->status_payment=='unpaid' && $item->status_transaksi!='rejected')
            <form method="post" action="{{ route('history.update',$item->id) }}" enctype="multipart/form-data">
              @csrf
              @method('patch')
              <div class="mb-3">
                <strong >Pembayaran ke <span style="color:green;">BNI - 324789723847893247</span></strong>
              </div>
              <input type="hidden" name="id" value="{{ $item->id }}">
              <input type="hidden" name="user_id" value="{{ $item->user_id }}">
              <input type="hidden" name="qty" value="{{ $item->qty }}">
              <input type="hidden" name="paket" value="{{ $item->paket }}">
              <input type="hidden" name="total" value="{{ $item->total }}">
              <div class="mb-3">
                <label for="bukti_pembayaran" class="form-label">Bukti Pembayaran</label>
                <input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran" accept="image/*" required>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @endif

          </div>
        </div>
        @endforeach
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>