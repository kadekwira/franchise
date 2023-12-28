@extends('layout.template')
@section('content')
    <div class="content-wrapper">
        @include('sweetalert::alert')
        <div class="content-header">
            <!-- Page Heading -->
            <div class="d-flex justify-content-between align-items-center mb-4 mt-3">
                <h1 class="h3 mb-2 text-gray-800">Data Transaksi Penjualan</h1>
            </div>
        </div>

        <div class="content">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body p-2">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Pembeli</th>
                                    <th class="text-center">Qty</th>
                                    <th class="text-center">Paket</th>
                                    <th class="text-center">Total Harga</th>
                                    <th class="text-center">Bukti Pembayaran</th>
                                    <th class="text-center">Status Payment</th>
                                    <th class="text-center">Status Transaksi</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($waiting->count())
                                    @php($no = 1)
                                    @foreach ($waiting as $data)
                                        <tr>
                                            <td class="text-center">{{ $no }}</td>
                                            <td class="text-center">{{ $data->user->name }}</td>
                                            <td class="text-center">{{ $data->qty }}</td>
                                            <td class="text-center">{{ $data->paket }}</td>
                                            <td class="text-center">@currency($data->total)</td>
                                            <td class="text-center">
                                                @if ($data->bukti_pembayaran != null)
                                                    <a href="{{ asset('storage/' . $data->bukti_pembayaran) }}"
                                                        target="_blank">Bukti Pembayaran</a>
                                                @endif
                                            </td>

                                            @if ($data->status_payment == 'paid')
                                                <td class="text-center "> <span
                                                        class="badge bg-success">{{ $data->status_payment }}</span></td>
                                            @else
                                                <td class="text-center "> <span
                                                        class="badge bg-danger">{{ $data->status_payment }}</span></td>
                                            @endif
                                            <td class="text-center "> <span
                                                    class="badge bg-warning">{{ $data->status_transaksi }}</span></td>

                                            <td class="text-center">
                                                <a href="/admin/status/acc/{{ $data->id }}" class="btn btn-success">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                                <a class="btn btn-danger" href="/admin/status/rejected/{{ $data->id }}">
                                                    <i class="nav-icon fa-sharp fas fa-ban"></i>
                                                </a>
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

        <div class="content">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 ">
                    <div class="row g-3">
                        <div class="col-md-8">
                            <h6 class="m-0 font-weight-bold text-primary">Table Data Transaksi Penjualan</h6>
                        </div>
                        <div class="col-md-4">
                            <form class="input-group mb-3" action="/admin/penjualan">
                                <input type="text" class="form-control" placeholder="Ketikan Keyword...." id="search"
                                    name="search">
                                <button class="btn btn-primary" type="submit" id="button-addon2"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                            <a href="/admin/penjualan" class="btn btn-danger float-end">
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
                                    <th class="text-center">Nama Pembeli</th>
                                    <th class="text-center">Qty</th>
                                    <th class="text-center">Paket</th>
                                    <th class="text-center">Total Harga</th>
                                    <th class="text-center">Status Payment</th>
                                    <th class="text-center">Status Transaksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($penjualan->count())
                                    @php($no = 1)
                                    @foreach ($penjualan as $data)
                                        <tr>
                                            <td class="text-center">{{ $no }}</td>
                                            <td class="text-center">{{ $data->user->name }}</td>
                                            <td class="text-center">{{ $data->qty }}</td>
                                            <td class="text-center">{{ $data->paket }}</td>
                                            <td class="text-center">@currency($data->total)</td>
                                            @if ($data->status_payment == 'paid')
                                                <td class="text-center "> <span
                                                        class="badge bg-success">{{ $data->status_payment }}</span></td>
                                            @else
                                                <td class="text-center "> <span
                                                        class="badge bg-danger">{{ $data->status_payment }}</span></td>
                                            @endif

                                            @if ($data->status_transaksi == 'aproved')
                                                <td class="text-center "><span
                                                        class="badge bg-success">{{ $data->status_transaksi }}</span></td>
                                            @else
                                                <td class="text-center "> <span
                                                        class="badge bg-danger">{{ $data->status_transaksi }}</span></td>
                                            @endif
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
