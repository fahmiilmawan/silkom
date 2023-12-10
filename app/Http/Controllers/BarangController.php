<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
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
        $dataBarang = $request->validate([
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'jumlah' => 'required',
            'status' => 'required',
            'ruangan' => 'required',
            'deskripsi' => 'required'
        ]);

        $dataBarang = new Barang;
        $dataBarang->nama_barang = $request->nama_barang;
        $dataBarang->id_kategori = $request->kategori_barang;
        $dataBarang->jumlah = $request->jumlah;
        $dataBarang->status = $request->status;
        $dataBarang->id_ruangan = $request->ruangan;
        $dataBarang->deskripsi = $request->deskripsi;
        $dataBarang->save();

        return redirect()->route('barangPage');

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
        $dataBarang = $request->validate([
            'nama_barang' => 'required',
            'id_kategori' => 'required',
            'jumlah' => 'required',
            'status' => 'required',
            'id_ruangan' => 'required',
            'deskripsi' => 'required'
        ]);

        $dataBarang = Barang::find($id);
        $dataBarang->nama_barang = $request->nama_barang;
        $dataBarang->id_kategori = $request->id_kategori;
        $dataBarang->jumlah = $request->jumlah;
        $dataBarang->status = $request->status;
        $dataBarang->id_ruangan = $request->id_ruangan;
        $dataBarang->deskripsi = $request->deskripsi;
        $dataBarang->save();

        return redirect()->route('barangPage');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataBarang = Barang::find($id);
        $dataBarang->delete();
        return redirect()->back();
    }
}
