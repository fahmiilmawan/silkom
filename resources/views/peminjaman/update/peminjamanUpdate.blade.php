@extends('layout.master')
@section('main-content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Form Ubah Peminjaman</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form action="{{ route('peminjamanUpdate',$dataPeminjaman->id) }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Nama Peminjam</label>
                        <select name="id_user" class="form-control" id="">
                            @foreach ($dataUser as $user )
                                <option value="{{ $user->id }}"{{ (old('id_user',$dataPeminjaman->id_user ) == $user->id) ? 'selected' : '' }}>
                                    {{ $user->username }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Nama Barang</label>
                        <select name="id_barang" class="form-control" id="">
                            @foreach ( $dataBarang as $barang )
                                <option value="{{ $barang->id }}"{{ (old('id_barang', $dataPeminjaman->id_barang) == $barang->id ) ? 'selected' : '' }}>
                                    {{ $barang->nama_barang }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Waktu Pinjam</label>
                        <input type="datetime-local" name="waktu_pinjam" class="form-control input-default " value="{{ $dataPeminjaman->waktu_pinjam }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Status Pinjaman</label>
                        <input type="text" name="status" class="form-control bg-dark text-white" value="Sedang Dipinjam" readonly>
                    </div>
                </div>
                <button class="btn btn-success">Ubah</button>
            </form>
        </div>
    </div>
</div>
@endsection
