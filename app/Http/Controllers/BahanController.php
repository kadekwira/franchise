<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use Illuminate\Http\Request;
use App\Http\Traits\HandleRupiah;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class BahanController extends Controller
{

    use HandleRupiah;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Delete Bahan!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.bahan.index',['bahan'=>Bahan::latest()->search(request(['search']))->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.bahan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $harga = $this->getNumeric($request->harga);
        $result = Bahan::create([
            'nama_barang' => $request->nama_barang,
            'berat' => $request->berat,
            'satuan' => $request->satuan,
            'harga' => $harga,
            'stock' => $request->stock,
            'status' => $request->status,
            'deskripsi' => $request->deskripsi,
        ]);

        if($result->wasRecentlyCreated==true){
            Alert::success('Sukses', 'Data Berhasil Ditambkan');
        }else{
            Alert::error('Gagal', 'Opps Something Wrong');
        }

        return redirect('/admin/bahan');
       
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
        $bahan = Bahan::where('id', $id)->first();
        return view('admin.bahan.edit',compact(['bahan']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bahan $bahan)
    {
        $harga = $this->getNumeric($request->harga);
        $result = $bahan->update([
            'nama_barang' => $request->nama_barang,
            'berat' => $request->berat,
            'satuan' => $request->satuan,
            'harga' => $harga,
            'stock' => $request->stock,
            'status' => $request->status,
            'deskripsi' => $request->deskripsi,
        ]);
        
        if($result == true){
            Alert::success('Sukses', 'Data Berhasil Diupdate');
        }else{
            Alert::error('Gagal', 'Opps Something Wrong');
        }

        return redirect('/admin/bahan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bahan = Bahan::where('id', $id)->first();
        $result = $bahan->delete();
        if($result == true){
            Alert::success('Sukses', 'Data Berhasil Dihapus');
        }else{
            Alert::error('Gagal', 'Opps Something Wrong');
        }
        return redirect('/admin/bahan');
    }
}
