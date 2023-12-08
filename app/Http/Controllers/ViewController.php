<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\KategoriBarang;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
// LANDING
     public function landingPage()
     {
         return view('landing');
     }

// AUTH
     public function loginPage()
    {
        return view('login');
    }

    public function dashboardPage()
    {
        return view('dashboard.index');
    }

// RUANGAN
    public function ruanganPage()
    {
        $dataRuangan = Ruangan::all();
        return view('ruangan.ruangan',compact('dataRuangan'));
    }

    public function ruanganCreatePage()
    {
        return view('ruangan.create.ruanganCreate');
    }

    public function ruanganUpdatePage(string $id)
    {
        $dataRuangan = Ruangan::find($id);
        return view('ruangan.update.ruanganUpdate',compact('dataRuangan'));
    }

// BARANG
    public function barangPage()
    {
        $dataBarang = Barang::all();

        return view('barang.barang',compact('dataBarang'));
    }

    public function barangCreatePage()
    {
        $dataKategori = KategoriBarang::all();
        $dataRuangan = Ruangan::all();
        return view('barang.create.barangCreate',compact('dataKategori','dataRuangan'));
    }

    public function barangUpdatePage()
    {
        return view('barang.update.barangUpdate');
    }


// KATEGORI BARANG
    public function kategoriBarangPage()
    {
        $dataKategori = KategoriBarang::all();
        return view('barang.kategoriBarang',compact('dataKategori'));
    }

    public function kategoriBarangCreatePage()
    {
        return view('barang.create.kategoriCreate');
    }

    public function kategoriBarangUpdatePage(string $id)
    {
        $dataKategori = KategoriBarang::find($id);
        return view('barang.update.kategoriUpdate',compact('dataKategori'));
    }


    public function peminjamanPage()
    {
        return view('peminjaman.peminjaman');
    }

    public function pengembalianPage()
    {
        return view('pengembalian.pengembalian');
    }

    public function historyPage()
    {
        return view('history.history');
    }

    public function userPage()
    {
        return view('user.user');
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
