<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiPenjualan;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Rejected Transaksi!';
        $text = "Are you sure you want to rejected?";
        confirmDelete($title, $text);
        return view('admin.penjualan.index',[
        'penjualan'=>TransaksiPenjualan::where('status_transaksi','aproved')->orWhere('status_transaksi','rejected')->search(request(['search']))->get(),
        'waiting'=>TransaksiPenjualan::where('status_transaksi','waiting')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        TransaksiPenjualan::create([
            'user_id'=>intval($request->input('user_id')),
            'qty'=>intval($request->input('qty')),
            'paket'=> intval($request->input('paket')),
            'total'=>intval($request->input('total')),
            'status_payment'=>'unpaid',
            'status_transaksi'=>'waiting',
                
        ]);
            return response()->json([
                "status"=>"Sukses",
                "pesan" => "Segera Lakukan Pembayaran! 1x24 jam",
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TransaksiPenjualan $model)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function history(string $id){
        $data = TransaksiPenjualan::where('user_id',$id)->get();
        return view('user.history',compact('data'));
    }


    public function uploadBukti(Request $request){
        $model = TransaksiPenjualan::where('id',$request->id);
        $fileName = rand(0, 99999) . "." . $request->bukti_pembayaran->getClientOriginalExtension();
        $path = request('bukti_pembayaran')->store('public/bukti');
        $path = explode('/',$path);
        $path=$path[1].'/'.$path[2];

        $model->update([
            'user_id'=>intval($request->user_id),
            'qty'=>intval($request->qty),
            'paket'=> intval($request->paket),
            'total'=>intval($request->total),
            'bukti_pembayaran'=>$path,
            'status_payment'=>'paid',
            'status_transaksi'=>'waiting',
        ]);

        return redirect()->back();
    }

    public function acc(string $id){

        $result = TransaksiPenjualan::where('id', $id)
        ->update(['status_transaksi' => 'aproved']);
        if($result == true){
            Alert::success('Sukses', 'Data Berhasil Diterima');
        }else{
            Alert::error('Gagal', 'Opps Something Wrong');
        }
        return redirect('/admin/penjualan');
    }

    public function rejected(string $id){
        $result = TransaksiPenjualan::where('id', $id)
        ->update(['status_transaksi' => 'rejected']);
        if($result == true){
            Alert::success('Sukses', 'Data Berhasil Ditolak');
        }else{
            Alert::error('Gagal', 'Opps Something Wrong');
        }
        return redirect('/admin/penjualan');

    }
}
