@extends('layout.master')
@section('main-content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Form Ubah Kategori Barang</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form action="{{ route('kategoriUpdate',$dataKategori->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="nama_kategori" class="form-control input-default " value="{{ $dataKategori->nama_kategori }}">
                </div>
                <button class="btn btn-primary">Ubah</button>
            </form>
        </div>
    </div>
</div>
@endsection
