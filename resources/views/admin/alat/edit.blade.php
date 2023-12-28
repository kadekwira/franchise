@extends('layout.template')
@section('content')

    <div class="content-wrapper">

        <div class="content-header">
            <!-- Page Heading -->
            <div class="d-flex justify-content-between align-items-center mb-4 mt-3">
                <h1 class="h3 mb-2 text-gray-800">Data Alat</h1>
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
                <h6 class="m-0 font-weight-bold text-primary">Form Data Alat</h6>
            </div>
            <div class="card-body">
                <form class="row g-3" method="post" action="{{ route('alat.update', $alat->id ) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" autocomplete="off"
                             value="{{$alat->nama_barang}}">
                    </div>
                    <div class="col-md-6">
                        <label for="berat" class="form-label">Berat</label>
                        <input type="number" class="form-control" id="berat" name="berat" placeholder="contoh:20" value="{{$alat->berat}}">
                    </div>
                    <div class="col-md-6">
                        <label for="satuan" class="form-label">Satuan</label>
                        <input type="text" class="form-control" id="satuan" name="satuan"
                            placeholder="contoh: KG / G / Ons" value="{{$alat->satuan}}">
                    </div>

                    <div class="col-md-12">
                        <label for="harga" class="form-label">Harga Barang</label>
                        <input type="text" class="form-control" id="harga" name="harga" id="harga" value="@currency($alat->harga)"> 
                    </div>
                    <div class="col-md-6">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock" value="{{$alat->stock}}">
                    </div>
                    <div class="col-md-6">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" name="status">
                            @if($alat->status=='tersedia')
                            <option value="tersedia" selected>Tersedia</option>
                            <option value="habis">Habis</option>
                            @else
                            <option value="tersedia">Tersedia</option>
                            <option value="habis" selected>Habis</option>
                            @endif
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{$alat->deskripsi}}</textarea>

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
