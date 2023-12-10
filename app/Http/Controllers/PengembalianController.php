<?php

namespace App\Http\Controllers;

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
        $dataPengembalian = $request->validate([
            'id_user' => 'required',
            'id_barang' => 'required',
            'waktu_pengembalian' => 'required',
            'status' => 'required',
        ]);

        $dataPengembalian = Pengembalian::find($id);
        $dataPengembalian->id_user = $request->id_user;
        $dataPengembalian->id_barang = $request->id_barang;
        $dataPengembalian->waktu_pengembalian = $request->waktu_pengembalian;
        $dataPengembalian->status = $request->status;
        $dataPengembalian->save();

        return redirect()->route('pengembalianPage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
