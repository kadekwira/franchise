@extends('layout.template')
@section('content')

    <div class="content-wrapper">
        @include('sweetalert::alert')
        <div class="content-header">
            <!-- Page Heading -->
            <div class="d-flex justify-content-between align-items-center mb-4 mt-3">
                <h1 class="h3 mb-2 text-gray-800">Data Paket</h1>
            </div>
        </div>

        <div class="content">
          <div class="d-flex flex-wrap justify-content-center align-items-center gap-5">
            <div class="card" style="width: 20rem;">
              <img src="{{asset('images/both.png')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title fw-bold">Paket 1</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              <ul class="list-group list-group-flush">
                {{printCekStockPaket($alat,"Both Exclusive")}}
                {{printCekStockPaket($alat,"Satu set perlengkapan nasi goreng")}}
                {{printCekStockPaket($bahan,"Bahan baku awal untuk 100 porsi & menu tambahan")}}
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  SOP
                  <i class="fa-solid fa-check" style="color:green;"></i>
                </li>
                {{printCekStockPaket($alat,"Seragam")}}
                {{printCekStockPaket($alat,"Brosur & Banner")}}
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Hak guna merk
                  <i class="fa-solid fa-check" style="color:green;"></i>
                </li>
              </ul>
              <div class="card-body">
                <a href="/admin/alat" class="card-link">Cek Alat</a>
                <a href="/admin/bahan" class="card-link">Cek Bahan</a>
              </div>
            </div>
            <div class="card" style="width: 20rem;">
              <img src="{{asset('images/mini-cafe.png')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title fw-bold">Paket 2</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              <ul class="list-group list-group-flush">
                {{printCekStockPaket($alat,"Bar & Furniture")}}
                {{printCekStockPaket($alat,"Satu set perlengkapan nasi goreng")}}
                {{printCekStockPaket($bahan,"Bahan baku awal untuk 100 porsi & menu tambahan")}}
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  SOP
                  <i class="fa-solid fa-check" style="color:green;"></i>
                </li>
                {{printCekStockPaket($alat,"Seragam")}}
                {{printCekStockPaket($alat,"Brosur & Banner")}}
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Hak guna merk
                  <i class="fa-solid fa-check" style="color:green;"></i>
                </li>
              </ul>
              <div class="card-body">
                <a href="/admin/alat" class="card-link">Cek Alat</a>
                <a href="/admin/bahan" class="card-link">Cek Bahan</a>
              </div>
            </div>
            <div class="card" style="width: 20rem;">
              <img src="{{asset('images/x.png')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title fw-bold">Paket 3</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Both Exclusive
                  <i class="fa-solid fa-x" style="color:red;"></i>
                </li>
                {{printCekStockPaket($alat,"Satu set perlengkapan nasi goreng")}}
                {{printCekStockPaket($bahan,"Bahan baku awal untuk 100 porsi & menu tambahan")}}
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  SOP
                  <i class="fa-solid fa-check" style="color:green;"></i>
                </li>
                {{printCekStockPaket($alat,"Seragam")}}
                {{printCekStockPaket($alat,"Brosur & Banner")}}
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Hak guna merk
                  <i class="fa-solid fa-check" style="color:green;"></i>
                </li>
              </ul>
              <div class="card-body">
                <a href="/admin/alat" class="card-link">Cek Alat</a>
                <a href="/admin/bahan" class="card-link">Cek Bahan</a>
              </div>
            </div>
          </div>
        </div>
    </div>

@endsection

@section('tooltips')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script>
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>
@endsection
