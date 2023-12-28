@extends('layout.template')
@section('content')

    <div class="content-wrapper">

        <div class="content-header">
            <!-- Page Heading -->
            <div class="d-flex justify-content-between align-items-center mb-4 mt-3">
                <h1 class="h3 mb-2 text-gray-800">Data User</h1>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="content">

        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form Data User</h6>
            </div>
            <div class="card-body">
                <form class="row g-3" method="post" action="{{ route('user.update', $user->id ) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" name="name" autocomplete="off" value="{{$user->name}}">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"  value="{{$user->email}}">
                    </div>
                    <div class="col-md-12">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{$user->password}}"
                        readonly
                        >
                    </div>
                    <div class="col-md-12">
                        <label for="noHp" class="form-label">No Hp</label>
                        <input type="number" class="form-control" id="noHp" name="noHp" value="{{$user->noHp}}">
                    </div>
                    <div class="col-md-4">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" name="role">
                            @if($user->role=='admin')
                            <option value="admin" selected>Admin</option>
                            <option value="user">User</option>
                            @else
                            <option value="admin">Admin</option>
                            <option value="user" selected>User</option>
                            @endif
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="jk" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="jk">
                            @if ($user->jk=='laki-laki')
                            <option value="laki-laki" selected>Laki Laki</option>
                            <option value="perempuan">Perempuan</option>
                            @else                                
                            <option value="laki-laki">Laki Laki</option>
                            <option value="perempuan" selected>Perempuan</option>
                            @endif
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" name="status">
                            @if ($user->status=='aktif')
                            <option value="aktif" selected>Aktif</option>
                            <option value="non-aktif">Non Aktif</option>
                            @else                                
                            <option value="aktif">Aktif</option>
                            <option value="non-aktif" selected>Non Aktif</option>
                            @endif
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3">{{$user->alamat}}</textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- DataTales Example -->
    </div>

@endsection

@section('rupiah')
<script src="{{ url('template') }}/dist/js/currency.js"></script>
@endsection
