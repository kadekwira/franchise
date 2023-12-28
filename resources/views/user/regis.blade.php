<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Franchise</title>

</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/2f708729c7.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ url('template') }}/css/index.css">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{ url('template') }}/plugins/fontawesome-free/css/all.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ url('template') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{ url('template') }}/dist/css/adminlte.min.css">
</head>

<body class="login-page bg-white">
  @include('sweetalert::alert')
    <div class="d-flex gap-2 justify-content-center align-items-center ">
        <img src="{{ url('images') }}/login.jpg" alt="" class="foto-login" >
        <div class="w-50 mt-5 justify-content-center align-items-center d-flex flex-column">
            <div class="login-logo fs-3 p-2 fw-semibold">
                Daftar Franchise
            </div>
            <div class="card-body login-card-body bg-white">
              <form class="row g-3" method="post" action="/admin/user" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" name="name" autocomplete="off"
                        autofocus>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" >
                </div>
                <div class="col-md-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        >
                </div>
                <div class="col-md-12">
                    <label for="noHp" class="form-label">No Hp</label>
                    <input type="number" class="form-control" id="noHp" name="noHp">
                </div>
                  <input type="hidden" name="role" value="user">
                  <input type="hidden" name="status" value="aktif">
                  <input type="hidden" name="user" value="true">
                <div class="col-md-12">
                    <label for="jk" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="jk">
                        <option value="laki-laki">Laki Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Daftar</button>
                    <a href="/login" class="ms-3">Login</a>
                    <a href="/" class="ms-3">Home</a>
                </div>
            </form>
            </div>
        </div>

    </div>

    <!-- ./wrapper -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- REQUIRED SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <!-- jQuery -->
    <script src="{{ url('template') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ url('template') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{ url('template') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('template') }}/dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{ url('template') }}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="{{ url('template') }}/plugins/raphael/raphael.min.js"></script>
    <script src="{{ url('template') }}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="{{ url('template') }}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="{{ url('template') }}/plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="{{ url('template') }}/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ url('template') }}/dist/js/pages/dashboard2.js"></script>
</body>

</html>
