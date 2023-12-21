<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <a href="" class="nav-link fw-semibold fs-5"> Paket</a>
                <div class="d-flex gap-2">
                    <a href="" class=" daftar" id="button">Daftar</a>
                    <a href="" class=" masuk" id="button">Masuk</a>
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
                <button class="daftar-home w-50 align-self-center" id="button">
                    Lihat Paket Franchise
                </button>
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
                <button class="daftar-home w-50 " id="button">
                    Lihat Paket Franchise
                </button>
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
                    <button class="btn btn-paket">
                        Beli
                    </button>
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
                    <button class="btn btn-paket">
                        Beli
                    </button>
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
                    <button class="btn btn-paket">
                        Beli
                    </button>
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
                <span class="text-white" >Kakkoi Gohan</span>
            </div>
        </footer>
    </div>

    <script src="https://kit.fontawesome.com/2f708729c7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
