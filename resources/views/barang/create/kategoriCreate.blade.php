@extends('layout.master')
@section('main-content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Form Tambah Kategori Barang</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form action="{{ route('kategoriStore') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="nama_kategori" class="form-control input-default " placeholder="Masukkan Nama Kategori">
                </div>
                <button class="btn btn-success">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection
