<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\KategoriBarang;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use App\Models\Ruangan;
use App\Models\User;
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

    public function barangUpdatePage(string $id)
    {
        $dataBarang = Barang::find($id);
        $dataKategori = KategoriBarang::all();
        $dataBarangAll = Barang::all();
        $dataRuangan = Ruangan::all();
        return view('barang.update.barangUpdate',compact('dataBarang','dataKategori','dataBarangAll','dataRuangan'));
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

// PEMINJAMAN

    public function peminjamanPage()
    {
        $dataPeminjaman = Peminjaman::all();
        return view('peminjaman.peminjaman',compact('dataPeminjaman'));
    }

    public function peminjamanCreatePage()
    {
        $dataUser = User::all();
        $dataBarang = Barang::all();
        return view('peminjaman.create.createPeminjaman',compact('dataUser','dataBarang'));
    }

    public function peminjamanUpdatePage(string $id)
    {
        $dataPeminjaman = Peminjaman::find($id);
        $dataUser = User::all();
        $dataBarang = Barang::all();
        return view('peminjaman.update.peminjamanUpdate',compact('dataPeminjaman','dataUser','dataBarang'));
    }

// PENGEMBALIAN

    public function pengembalianPage()
    {
        $dataPengembalian = Pengembalian::all();
        return view('pengembalian.pengembalian',compact('dataPengembalian'));
    }

    public function pengembalianCreatePage()
    {
        return view('pengembalian.create.pengembalianCreate');
    }

    public function historyPage()
    {
        return view('history.history');
    }

// USER
    public function userPage()
    {
        $dataUser = User::all();
        return view('user.user',compact('dataUser'));
    }

    public function userCreatePage()
    {

        return view('user.create.userCreate');
    }

    public function userUpdatePage(string $id)
    {
        $dataUser = User::find($id);
        $dataUserAll = User::all();
        return view('user.update.userUpdate',compact('dataUser','dataUserAll'));
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
