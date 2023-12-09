@extends('layout.master')
@section('main-content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Form Ubah Barang</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form action="{{ route('barangUpdate',$dataBarang->id) }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control input-default " placeholder="Masukkan Nama Barang" value="{{ $dataBarang->nama_barang }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Kategori Barang</label>
                        <select name="id_kategori" class="form-control" id="">
                            @foreach ( $dataKategori as $kategori )
                            <option value="{{ $kategori->id }}" {{ (old('id_kategori',$dataBarang->id_kategori) == $kategori->id) ? 'selected' : '' }}>
                                {{ $kategori->nama_kategori }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Jumlah</label>
                        <input type="number" name="jumlah" class="form-control input-default " placeholder="Masukkan Jumlah Barang" value="{{ $dataBarang->jumlah }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Status Barang</label>
                        <select name="status" class="form-control" id="">
                            @foreach ($dataBarangAll as $barangAll )
                                <option value="{{ $barangAll->status }}"{{ (old('status', $dataBarang->status) == $barangAll->status) ? 'selected' : '' }} >
                                    {{ $barangAll->status }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Lokasi Barang</label>
                        <select name="id_ruangan" class="form-control" id="">
                                @foreach ( $dataRuangan as $ruangan )
                                    <option value="{{ $ruangan->id }}"{{ (old('id_ruangan', $dataBarang->id_ruangan) == $ruangan->id) ? 'selected' : '' }}>
                                        {{ $ruangan->nama_ruangan }}
                                    </option>
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Deskripsi Barang</label>
                    <textarea name="deskripsi" class="form-control"  id="" cols="30" rows="10" placeholder="Masukkan Deskripsi Barang">{{ $dataBarang->deskripsi }}</textarea>
                </div>
                <button class="btn btn-success">Ubah</button>
            </form>
        </div>
    </div>
</div>
@endsection
