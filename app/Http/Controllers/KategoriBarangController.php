<?php

namespace App\Http\Controllers;

use App\Models\KategoriBarang;
use Illuminate\Http\Request;

class KategoriBarangController extends Controller
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
        $dataKategori = $request->validate([
            'nama_kategori' => 'required'
        ]);

        $dataKategori = new KategoriBarang;
        $dataKategori->nama_kategori = $request->nama_kategori;
        $dataKategori->save();

        return redirect()->route('kategoriBarangPage');
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
        $dataKategori = $request->validate([
            'nama_kategori' => 'required'
        ]);

        $dataKategori = KategoriBarang::find($id);
        $dataKategori->nama_kategori = $request->nama_kategori;
        $dataKategori->save();

        return redirect()->route('kategoriBarangPage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataKategori = KategoriBarang::find($id);
        $dataKategori->delete();
        return redirect()->back();
    }
}
