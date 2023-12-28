@if (auth()->check())
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kakkoi Gohan Franchise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">
</head>

<body id="body">

    <nav class="navbar navbar-expand-lg fixed-top" id="nav">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo_gohan.png') }}" alt="" style="width:200px;">
            </a>
            <div class="d-flex gap-5 align-items-center">
                <a href="#home" class="nav-link fw-semibold fs-5"> Home</a>
                <a href="#about" class="nav-link fw-semibold fs-5"> About</a>
                <a href="#paket" class="nav-link fw-semibold fs-5"> Paket</a>
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
                                <li><a class="dropdown-item" href="/history/{{ auth()->user()->id }}">Transaksi</a></li>
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

    <div class="container" style="margin-top:100px" id="home">
        <div class="d-flex justify-content-center align-items-center gap-5">
            <div class="d-flex flex-column  ms-2 w-50">
                <h1 class="title-home text-center">Kakkoi Gohan</h1>
                <p class="franchise text-center">Franchise</p>
                <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos sint error, illum
                    facere quam quisquam culpa? Nam perspiciatis sed esse. Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Ex, et!</p>
                <a href="#paket" class="daftar-home w-50 align-self-center" id="button">
                    Lihat Paket Franchise
                </a>
            </div>
            <div class="position-relative">
                <img src="{{ asset('images/home.png') }}" alt="" class="home_img ">
                <div class="semi-rounded"></div>
            </div>
        </div>
    </div>


    <div class="container-fluid" id="about">
        <div class="d-flex justify-content-around align-items-center gap-5">
            <div class="position-relative ms-2">
                <img src="{{ asset('images/home.png') }}" alt="" class="home_img ">
                <div class="semi-rounded2"></div>
            </div>
            <div class="d-flex flex-column w-50 ">
                <h2 class="fs-2 fw-bold ">About</h2>
                <h1 class="title-home">Kakkoi Gohan</h1>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ad natus
                    voluptatibus ullam delectus, doloremque at sequi possimus alias, obcaecati modi aliquam placeat
                    aliquid id consequatur repudiandae in corrupti iusto beatae voluptatum harum totam? Numquam facere
                    quibusdam, cupiditate fugiat deleniti, rerum molestiae quae facilis laudantium odit, minima
                    voluptates harum rem sit dolore placeat exercitationem quia? Quisquam minus non id sed?</p>
                <a href="#paket" class="daftar-home w-50 " id="button">
                    Lihat Paket Franchise
                </a>
            </div>
        </div>
    </div>

    <div class="container" id="paket">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="text-center w-50">
                <h1 class="fw-bold">Paket</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores nobis at a natus molestiae est
                    esse iure beatae, voluptatem temporibus saepe eaque iusto accusamus accusantium!</p>
            </div>

            <div class="d-flex justify-content-between align-items-center gap-3">
                <div class="w-25 d-flex flex-column gap-3 justify-content-center align-items-center">
                    <img src="{{ asset('images/both.png') }}" alt="" class="w-100">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header text-center fw-bold" id="card-paket">
                            Paket 1
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Both Exclusive </span>
                                <i class="fa-solid fa-check" style="color:green;"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Satu set perlengkapan nasi goreng</span>
                                <i class="fa-solid fa-check" style="color:green;"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Bahan baku awal untuk 100 porsi & menu tambahan</span>
                                <i class="fa-solid fa-check" style="color:green;"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>SOP</span>
                                <i class="fa-solid fa-check" style="color:green;"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Seragam</span>
                                <i class="fa-solid fa-check" style="color:green;"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Brosur & Banner</span>
                                <i class="fa-solid fa-check" style="color:green;"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Hak guna merk</span>
                                <i class="fa-solid fa-check" style="color:green;"></i>
                            </li>
                        </ul>
                    </div>
                    @if (auth()->check())
                    <button type="button" class="btn btn-paket" data-bs-toggle="modal"
                    data-bs-target="#paket1">
                    Beli
                </button>
                    @else
                        <a href="/login" class="btn btn-paket">
                            Beli
                        </a>
                    @endif
                </div>
                <div class="w-25 d-flex flex-column gap-3  justify-content-center align-items-center">
                    <img src="{{ asset('images/mini-cafe.png') }}" alt="" class="w-100">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header text-center fw-bold" id="card-paket">
                            Paket 2
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Bar & Furniture </span>
                                <i class="fa-solid fa-check" style="color:green;"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Satu set perlengkapan nasi goreng</span>
                                <i class="fa-solid fa-check" style="color:green;"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Bahan baku awal untuk 100 porsi & menu tambahan</span>
                                <i class="fa-solid fa-check" style="color:green;"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>SOP</span>
                                <i class="fa-solid fa-check" style="color:green;"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Seragam</span>
                                <i class="fa-solid fa-check" style="color:green;"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Brosur & Banner</span>
                                <i class="fa-solid fa-check" style="color:green;"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Hak guna merk</span>
                                <i class="fa-solid fa-check" style="color:green;"></i>
                            </li>
                        </ul>
                    </div>
                    @if (auth()->check())
                    <button type="button" class="btn btn-paket" data-bs-toggle="modal"
                    data-bs-target="#paket2">
                    Beli
                </button>
                    @else
                        <a href="/login" class="btn btn-paket">
                            Beli
                        </a>
                    @endif
                </div>

                <div class="w-25 d-flex flex-column gap-3  justify-content-center align-items-center">
                    <img src="{{ asset('images/x.png') }}" alt="" class="w-100">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header text-center fw-bold" id="card-paket">
                            Paket 3
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Both Exclusive</span>
                                <i class="fa-solid fa-xmark" style="color:red;"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Satu set perlengkapan nasi goreng</span>
                                <i class="fa-solid fa-check" style="color:green;"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Bahan baku awal untuk 100 porsi & menu tambahan</span>
                                <i class="fa-solid fa-check" style="color:green;"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>SOP</span>
                                <i class="fa-solid fa-check" style="color:green;"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Seragam</span>
                                <i class="fa-solid fa-check" style="color:green;"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Brosur & Banner</span>
                                <i class="fa-solid fa-check" style="color:green;"></i>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Hak guna merk</span>
                                <i class="fa-solid fa-check" style="color:green;"></i>
                            </li>
                        </ul>
                    </div>
                    @if (auth()->check())
                        <button type="button" class="btn btn-paket" data-bs-toggle="modal"
                            data-bs-target="#paket3">
                            Beli
                        </button>
                    @else
                        <a href="/login" class="btn btn-paket">
                            Beli
                        </a>
                    @endif
                </div>



                <!-- Modal1 -->
                <div class="modal fade" id="paket1" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Paket1</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row g-3" method="post">
                                    <input type="hidden" name="_token" id="_token"
                                        value="{{ csrf_token() }}">
                                    <input type="hidden" id="paket1_user" value="{{ auth()->user()->id }}">
                                    <input type="hidden" id="paket1_val" value="1">
                                    <div class="col-12">
                                        <label for="qty" class="form-label">Qty</label>
                                        <input type="number" class="form-control" id="qty1" name="qty">
                                    </div>
                                    <div class="col-12">
                                        <label for="harga" class="form-label">Harga</label>
                                        <input type="text" class="form-control" id="harga1" name="harga"
                                            value="@currency(15000000)" readonly>
                                    </div>
                                    <div class="col-12">
                                        <label for="total" class="form-label">Total</label>
                                        <input type="text" class="form-control" id="total1" name="total"
                                            readonly>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary"
                                            id="btnPaket1">Checkout</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- modal2 --}}
                <div class="modal fade" id="paket2" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Paket2</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row g-3" method="post">
                                    <input type="hidden" name="_token" id="_token"
                                        value="{{ csrf_token() }}">
                                    <input type="hidden" id="paket2_user" value="{{ auth()->user()->id }}">
                                    <input type="hidden" id="paket2_val" value="2">
                                    <div class="col-12">
                                        <label for="qty" class="form-label">Qty</label>
                                        <input type="number" class="form-control" id="qty2" name="qty">
                                    </div>
                                    <div class="col-12">
                                        <label for="harga" class="form-label">Harga</label>
                                        <input type="text" class="form-control" id="harga2" name="harga"
                                            value="@currency(50000000)" readonly>
                                    </div>
                                    <div class="col-12">
                                        <label for="total" class="form-label">Total</label>
                                        <input type="text" class="form-control" id="total2" name="total"
                                            readonly>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary"
                                            id="btnPaket2">Checkout</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="paket3" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Paket3</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row g-3" method="post">
                                    <input type="hidden" name="_token" id="_token"
                                        value="{{ csrf_token() }}">
                                    <input type="hidden" id="paket3_user" value="{{ auth()->user()->id }}">
                                    <input type="hidden" id="paket3_val" value="3">
                                    <div class="col-12">
                                        <label for="qty" class="form-label">Qty</label>
                                        <input type="number" class="form-control" id="qty3" name="qty">
                                    </div>
                                    <div class="col-12">
                                        <label for="harga" class="form-label">Harga</label>
                                        <input type="text" class="form-control" id="harga3" name="harga"
                                            value="@currency(7500000)" readonly>
                                    </div>
                                    <div class="col-12">
                                        <label for="total" class="form-label">Total</label>
                                        <input type="text" class="form-control" id="total3" name="total"
                                            readonly>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary"
                                            id="btnPaket3">Checkout</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <footer class="text-center text-white" style="background-color: #6164B8">
            <div class="container">
                <section class="mt-5">
                    <div class="row text-center d-flex justify-content-center pt-5">
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="#home" class="text-white">Home</a>
                            </h6>
                        </div>
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="#about" class="text-white">About</a>
                            </h6>
                        </div>
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="#paket" class="text-white">Paket</a>
                            </h6>
                        </div>
                    </div>
                </section>

                <hr class="my-5" />
                <section class="mb-5">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                                distinctio earum repellat quaerat voluptatibus placeat nam,
                                commodi optio pariatur est quia magnam eum harum corrupti
                                dicta, aliquam sequi voluptate quas.
                            </p>
                        </div>
                    </div>
                </section>
                <section class="text-center mb-5">
                    <a href="" class="text-white me-4">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-instagram"></i>
                    </a>
                </section>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2023 Copyright
                <span class="text-white">Kakkoi Gohan</span>
            </div>
        </footer>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/2f708729c7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>

@else
    <script>window.location = "/login";</script>
@endif

