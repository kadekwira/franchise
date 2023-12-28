<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\Bahan;
use Illuminate\Http\Request;
use App\Http\Traits\HandleStock;
use App\Http\Controllers\Controller;

class PaketController extends Controller
{
    use HandleStock;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bahan = $this->cekStock(Bahan::all());
        $alat = $this->cekStock(Alat::all());
        return view('admin.paket.index',compact(['bahan','alat']));
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
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
