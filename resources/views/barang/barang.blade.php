@extends('layout.master')
@section('main-content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Data Barang</h4>
            <p class="mb-0">Sistem Informasi Laboratorium Komputer</p>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <table id="barang" class="display" style="width:100%">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Barang</th>
                    <th class="text-center">Kategori</th>
                    <th class="text-center">Jumlah</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Lokasi</th>
                    <th class="text-center">Deskripsi</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($dataBarang as $barang )
                <tr>
                    <td class="text-center">{{ $i++ }}</td>
                    <td class="text-center">{{ $barang->nama_barang }}</td>
                    <td class="text-center">{{ $barang->kategoriBarang->nama_kategori}}</td>
                    <td class="text-center">{{ $barang->jumlah }}</td>
                    <td class="text-center">{{ $barang->status }}</td>
                    <td class="text-center">{{ $barang->ruangan->nama_ruangan }}</td>
                    <td class="text-center">{{ $barang->deskripsi }}</td>
                    <td class="text-center">
                        <a href="{{ route('barangUpdatePage',$barang->id) }}" class="btn btn-primary">Ubah</a> |
                        <a href="{{ route('barangDelete',$barang->id) }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
        </table>
        <a href="{{ route('barangCreatePage') }}" class="btn btn-success">Tambah</a>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script>
    new DataTable('#barang');
</script>

@endsection
