<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
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


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataRuangan = $request->validate([
            'nama_ruangan' => 'required',
        ]);

        $dataRuangan = new Ruangan;
        $dataRuangan->nama_ruangan = $request->nama_ruangan;
        $dataRuangan->save();

        return redirect()->route('ruanganPage')->with('suksess','Data Ruangan Berhasil Ditambahkan');


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
        $dataRuangan = $request->validate([
            'nama_ruangan' => 'required'
        ]);

        $dataRuangan = Ruangan::find($id);
        $dataRuangan->nama_ruangan = $request->nama_ruangan;
        $dataRuangan->save();
        return redirect()->route('ruanganPage')->with("Update","Data Berhasil Di Ubah");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataRuangan = Ruangan::find($id);
        $dataRuangan->delete();
        return redirect()->back();
    }
}
