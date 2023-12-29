<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use Illuminate\Http\Request;

class PengembalianController extends Controller
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
        $dataPengembalian = Pengembalian::findOrFail($id);
        $dataBarang = Barang::find($dataPengembalian->id_barang);
        $dataPeminjaman = Peminjaman::where('id_barang', $dataPengembalian->id_barang)
            ->where('id_user', $request->id_user)
            ->firstOrFail();

        if ($request->jumlah_pengembalian == $dataPeminjaman->jumlah_pinjam) {
            $dataPengembalian->id_user = $request->id_user;
            $dataPengembalian->id_barang = $dataPengembalian->id_barang;
            $dataPengembalian->jumlah_pengembalian = $request->jumlah_pengembalian;
            $dataPengembalian->waktu_pengembalian = $request->waktu_pengembalian;
            $dataPengembalian->status = "Sudah Dikembalikan";
            $dataPeminjaman->status = "Sudah Dikembalikan";
            $dataBarang->jumlah += $request->jumlah_pengembalian;

            $dataPengembalian->save();
            $dataPeminjaman->save();
            $dataBarang->save();

            return redirect()->route("pengembalianPage");
        } elseif ($request->jumlah_pengembalian < $dataPeminjaman->jumlah_pinjam) {
            $dataPengembalian->id_user = $request->id_user;
            $dataPengembalian->id_barang = $dataPengembalian->id_barang;
            $dataPengembalian->jumlah_pengembalian = $request->jumlah_pengembalian;
            $dataPengembalian->waktu_pengembalian = $request->waktu_pengembalian;
            $dataPengembalian->status = "Sedang Dipinjam";
            $dataPeminjaman->status = "Sedang Dipinjam";
            $dataPeminjaman->jumlah_pinjam -= $request->jumlah_pengembalian;
            $dataBarang->jumlah += $request->jumlah_pengembalian;

            $dataPengembalian->save();
            $dataPeminjaman->save();
            $dataBarang->save();

            return redirect()->route("pengembalianPage");
        } else {
            return redirect()->back();
        }
    }

        // // Validasi Apabila Jumlah Pengembalian Lebih Dari Jumlah Yang Dipinjam

        // if ($request->jumlah_pengembalian > $dataPeminjaman->jumlah_pinjam) {

        //     return redirect()->back();

        // // Validasi Apabila Jumlah Pengembalian Kurang Dari Jumlah Yang Dipinjam

        // } elseif ($request->jumlah_pengembalian < $dataPeminjaman->jumlah_pinjam) {
        //      $dataJumlahPengembalian =  $dataPeminjaman->jumlah_pinjam - $request->jumlah_pengembalian;
        //      $dataPengembalian->id_user = $request->id_user;
        //      $dataPengembalian->id_barang = $request->id_barang;
        //      $dataPengembalian->waktu_pengembalian = $dataJumlahPengembalian;
        //      $dataPengembalian->waktu_pengembalian = $request->waktu_pengembalian;
        //      $dataPengembalian->status = "Sedang Dipinjam";
        //      $dataPengembalian->save();

        //      $dataBarang->jumlah += $request->jumlah_pengembalian;
        //      $dataBarang->save();
        //      $dataPeminjaman->save();



        //     // Validasi Apabila Jumlah Pengembalian Sudah Sesuai Dengan Jumlah Yang Dipinjam

        //     if ($dataJumlahPengembalian < 1) {
        //         $dataPengembalian->id_user = $request->id_user;
        //         $dataPengembalian->id_barang = $request->id_barang;
        //         $dataPengembalian->waktu_pengembalian = $request->waktu_pengembalian;
        //         $dataPengembalian->status = "Sudah Dikembalikan";
        //         $dataPengembalian->save();
        //         $dataBarang->save();
        //         $dataPeminjaman->save();
        //         return redirect()->route('pengembalianPage');

        //     }else {

        //         $dataPengembalian->id_user = $request->id_user;
        //         $dataPengembalian->id_barang = $request->id_barang;
        //         $dataPengembalian->waktu_pengembalian = $request->waktu_pengembalian;
        //         $dataPengembalian->status = "Sedang Dipinjam";
        //         $dataPengembalian->save();
        //         $dataBarang->save();
        //         $dataPeminjaman->save();
        //         return redirect()->route('pengembalianPage');
        //     }
        // }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
