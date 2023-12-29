@extends('layout.master')
@section('main-content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Form Ubah Pengembalian</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form action="{{ route('pengembalianUpdate',$dataPengembalian->id) }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Nama Pengembali</label>
                        <select name="id_user" class="form-control" id="">
                            @foreach ($dataUser as $user )
                                <option value="{{ $user->id }}"{{ (old('id_user',$dataPengembalian->id_user ) == $user->id) ? 'selected' : '' }}>
                                    {{ $user->username }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Nama Barang</label>
                        <select name="id_barang" class="form-control" id="">
                            @foreach ( $dataBarang as $barang )
                                <option value="{{ $barang->id }}"{{ (old('id_barang', $dataPengembalian->id_barang) == $barang->id ) ? 'selected' : '' }}>
                                    {{ $barang->nama_barang }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Jumlah Pengembalian</label>
                        <input type="number" name="jumlah_pengembalian" class="form-control input-default " value="{{ $dataPengembalian->jumlah_pengembalian }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Waktu Pengembalian</label>
                        <input type="datetime-local" name="waktu_pengembalian" class="form-control input-default " value="{{ $dataPengembalian->waktu_pengembalian }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Status Pinjaman</label>
                        <input type="text" name="status" class="form-control bg-dark text-white" value="Sudah Dikembalikan" readonly>
                    </div>
                </div>
                <button class="btn btn-success">Ubah</button>
            </form>
        </div>
    </div>
</div>
@endsection
