<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function loginPage()
    {
        return view('login');
    }

    public function registerPage()
    {
        return view('register');
    }

    public function landingPage()
    {
        return view('landing');
    }

    public function dashboardPage()
    {
        return view('dashboard.index');
    }

    public function ruanganPage()
    {
        return view('ruangan.ruangan');
    }

    public function barangPage()
    {
        return view('barang.barang');
    }

    public function kategoriBarangPage()
    {
        return view('barang.kategoriBarang');
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
