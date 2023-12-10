<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $dataPeminjaman = $request->validate([
            'id_user' => 'required',
            'id_barang' => 'required',
            'waktu_pinjam' => 'required',
            'status' => 'required'
        ]);

        $dataPeminjaman = new Peminjaman;
        $dataPeminjaman->id_user = $request->id_user;
        $dataPeminjaman->id_barang = $request->id_barang;
        $dataPeminjaman->waktu_pinjam = $request->waktu_pinjam;
        $dataPeminjaman->status = $request->status;
        $dataPeminjaman->save();

        $dataPengembalian = new Pengembalian;
        $dataPengembalian->id_user = $request->id_user;
        $dataPengembalian->id_barang = $request->id_barang;
        $dataPengembalian->waktu_pengembalian = 'Belum Dikembalikan';
        $dataPengembalian->status = $request->status;
        $dataPengembalian->save();


        $dataHistory = new History;
        $dataHistory->id_peminjaman = $dataPeminjaman->id;
        $dataHistory->id_pengembalian = $dataPengembalian->id;
        $dataHistory->status = $dataPeminjaman->status;
        $dataHistory->save();

        return redirect()->route('peminjamanPage');
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
        $dataPeminjaman = $request->validate([
            'id_user' => 'required',
            'id_barang' => 'required',
            'waktu_pinjam' => 'required',
            'status' => 'required'
        ]);

        $dataPeminjaman = Peminjaman::find($id);
        $dataPeminjaman->id_user = $request->id_user;
        $dataPeminjaman->id_barang = $request->id_barang;
        $dataPeminjaman->waktu_pinjam = $request->waktu_pinjam;
        $dataPeminjaman->status = $request->status;
        $dataPeminjaman->save();

        return redirect()->route('peminjamanPage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataPeminjaman = Peminjaman::find($id);
        $dataHistory = History::where('id_peminjaman',$id)->first();
        $dataPengembalian = Pengembalian::find($dataHistory->id_pengembalian);
        $dataPengembalian->delete();
        $dataHistory->delete();
        $dataPeminjaman->delete();
        return redirect()->back();
    }


}
