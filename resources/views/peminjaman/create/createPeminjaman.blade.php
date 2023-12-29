@extends('layout.master')
@section('main-content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Form Tambah Peminjaman</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form action="{{ route('peminjamanStore') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Nama Peminjam</label>
                        <select name="id_user" class="form-control" id="">
                            @foreach ($dataUser as $user )
                                <option value="{{ $user->id }}">{{ $user->username }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Nama Barang</label>
                        <select name="id_barang" class="form-control" id="">
                            @foreach ( $dataBarang as $barang )
                                <option value="{{ $barang->id }}">{{ $barang->nama_barang }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Jumlah Pinjam</label>
                        <input type="number" name="jumlah_pinjam" class="form-control input-default " placeholder="Masukkan Jumlah Barang">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Waktu Pinjam</label>
                        <input type="datetime-local" name="waktu_pinjam" class="form-control input-default " placeholder="Masukkan Jumlah Barang">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Status Pinjaman</label>
                        <input type="text" name="status" class="form-control bg-dark text-white" value="Sedang Dipinjam" readonly>
                    </div>
                </div>
                <button class="btn btn-success">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection
