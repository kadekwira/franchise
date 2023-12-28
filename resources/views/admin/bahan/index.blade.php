@extends('layout.template')
@section('content')
    <div class="content-wrapper">
        @include('sweetalert::alert')
        <div class="content-header">
            <!-- Page Heading -->
            <div class="d-flex justify-content-between align-items-center mb-4 mt-3">
                <h1 class="h3 mb-2 text-gray-800">Data Bahan</h1>
                <a href="/admin/bahan/create" class="btn btn-success btn-circle">
                    <span class="icon text-white">
                        <i class="fa-solid fa-plus"></i>
                    </span>
                </a>
            </div>
        </div>

        <div class="content">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 ">
                    <div class="row g-3">
                        <div class="col-md-8">
                            <h6 class="m-0 font-weight-bold text-primary">Table Data Bahan</h6>
                        </div>
                        <div class="col-md-4">
                            <form class="input-group mb-3" action="/admin/bahan">
                                <input type="text" class="form-control" placeholder="Ketikan Keyword...." id="search"
                                    name="search">
                                <button class="btn btn-primary" type="submit" id="button-addon2"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                            <a href="/admin/bahan" class="btn btn-danger float-end">
                                <i class="fa-solid fa-arrows-rotate"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-2">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Bahan</th>
                                    <th class="text-center">Berat</th>
                                    <th class="text-center">Harga</th>
                                    <th class="text-center">Stock</th>
                                    <th class="text-center">Deskripsi</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($bahan->count())
                                @php($no =1)
                                @foreach($bahan as $data)
                                <tr>
                                    <td class="text-center">{{$no}}</td>
                                    <td class="text-center">{{$data->nama_barang}}</td>
                                    <td class="text-center">{{$data->berat}} {{$data->satuan}}</td>
                                    <td class="text-center">@currency($data->harga)</td>
                                    <td class="text-center">{{$data->stock}}</td>
                                    <td class="text-center">{{$data->deskripsi}}</td>
                                    @if($data->status =='tersedia')
                                    <td class="text-center "> <span class="badge bg-success">{{$data->status}}</span></td>
                                    @else
                                    <td class="text-center "> <span class="badge bg-danger">{{$data->status}}</span></td>
                                    @endif
                                    <td class="text-center">
                                        <a href="/admin/bahan/{{$data->id }}/edit" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <form action="/admin/bahan/{{$data->id }}" method="post" class="d-inline">
                                          @method('DELETE')
                                          @csrf
                                          <button type="submit" id="btn-hapus" class="btn btn-danger" data-confirm-delete="true">
                                            <i class="fa-solid fa-trash"></i>
                                          </button>
                                        </form>
                                    </td>
                                </tr>
                                @php($no++)
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="9" class="bg-secondary text-light">
                                      <div class="d-flex justify-content-center">
                                        Data not available
                                      </div>
                                    </td>
                                 </tr>
                                 @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
