<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Traits\HandleRupiah;

class AlatController extends Controller
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
        return view('admin.alat.index',['alat'=>Alat::latest()->search(request(['search']))->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.alat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $harga = $this->getNumeric($request->harga);
        $result = Alat::create([
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

        return redirect('/admin/alat');
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
        $alat = Alat::where('id', $id)->first();
        return view('admin.alat.edit',compact(['alat']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alat $alat)
    {
        $harga = $this->getNumeric($request->harga);
        $result = $alat->update([
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

        return redirect('/admin/alat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alat = Alat::where('id', $id)->first();
        $result = $alat->delete();
        if($result == true){
            Alert::success('Sukses', 'Data Berhasil Dihapus');
        }else{
            Alert::error('Gagal', 'Opps Something Wrong');
        }
        return redirect('/admin/alat');
    }
}
