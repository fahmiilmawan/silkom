@extends('layout.master')
@section('main-content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Form Tambah Barang</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form action="{{ route('barangStore') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control input-default " placeholder="Masukkan Nama Barang">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Kategori Barang</label>
                        <select name="kategori_barang" class="form-control" id="">
                                <option value="">Select Option</option>
                            @foreach ( $dataKategori as $kategori )
                                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Jumlah</label>
                        <input type="number" name="jumlah" class="form-control input-default " placeholder="Masukkan Jumlah Barang">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Status Barang</label>
                        <select name="status" class="form-control" id="">
                            <option value="">Select Option</option>
                            <option value="Baik">Baik</option>
                            <option value="Butuh Perbaikan">Butuh Perbaikan</option>
                            <option value="Butuh Perbaikan">Rusak Total</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Lokasi Barang</label>
                        <select name="ruangan" class="form-control" id="">
                            <option value="">Select Option</option>
                                @foreach ( $dataRuangan as $ruangan )
                                    <option value="{{ $ruangan->id }}">{{ $ruangan->nama_ruangan }}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Deskripsi Barang</label>
                    <textarea name="deskripsi" class="form-control"  id="" cols="30" rows="10" placeholder="Masukkan Deskripsi Barang"></textarea>
                </div>
                <button class="btn btn-success">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection
