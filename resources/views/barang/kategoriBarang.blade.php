@extends('layout.master')
@section('main-content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Data Kategori Barang</h4>
            <p class="mb-0">Sistem Informasi Laboratorium Komputer</p>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <table id="kategoriBarang" class="display" style="width:100%">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Kategori</th>
                    <th class="text-center" style="text-decoration: none">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ( $dataKategori as $kategori )
                <tr>
                    <td class="text-center">{{ $i++ }}</td>
                    <td class="text-center">{{ $kategori->nama_kategori }}</td>
                    <td class="text-center">
                        <a href="{{ route('kategoriBarangUpdatePage',$kategori->id) }}" class="btn btn-primary">Ubah</a> |
                        <a href="{{ route('kategoriDelete',$kategori->id) }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
        </table>
        <a href="{{ route('kategoriBarangCreatePage') }}" class="btn btn-success">Tambah</a>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script>
    new DataTable('#kategoriBarang');
</script>

@endsection
