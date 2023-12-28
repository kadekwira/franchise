<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.user.index',['user'=>User::latest()->search(request(['search']))->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $password = Hash::make($request->password);

        $result = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
            'alamat' => $request->alamat,
            'noHp' => $request->noHp,
            'jk' => $request->jk,
            'role' => $request->role,
            'status' => $request->status,
        ]);

        if($request->user=="true" || $request->user==true){
            if($result->wasRecentlyCreated==true){
                Alert::success('Sukses', 'Data Berhasil Ditambkan');
            }else{
                Alert::error('Gagal', 'Opps Something Wrong');
            }
            return redirect('/login');
        }else{
            if($result->wasRecentlyCreated==true){
                Alert::success('Sukses', 'Data Berhasil Ditambkan');
            }else{
                Alert::error('Gagal', 'Opps Something Wrong');
            }
            return redirect('/admin/user');
        }
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
        $user = User::where('id', $id)->first();
        return view('admin.user.edit',compact(['user']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {

        $result = $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'alamat' => $request->alamat,
            'noHp' => $request->noHp,
            'jk' => $request->jk,
            'role' => $request->role,
            'status' => $request->status,
        ]);
        
        if($result == true){
            Alert::success('Sukses', 'Data Berhasil Diupdate');
        }else{
            Alert::error('Gagal', 'Opps Something Wrong');
        }

        return redirect('/admin/user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::where('id', $id)->first();
        $result = $user->delete();
        if($result == true){
            Alert::success('Sukses', 'Data Berhasil Dihapus');
        }else{
            Alert::error('Gagal', 'Opps Something Wrong');
        }
        return redirect('/admin/user');
    }
}
