@extends('layout.master')
@section('main-content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>History Peminjaman dan Pengembalian</h4>
            <p class="mb-0">Sistem Informasi Laboratorium Komputer</p>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <table id="peminjaman" class="display" style="width:100%">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Peminjam</th>
                    <th class="text-center">Nama Barang</th>
                    <th class="text-center">Waktu Pinjam</th>
                    <th class="text-center">Status Pengembalian</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($dataHistory as $history )
                <tr>
                    <td class="text-center">{{ $i++ }}</td>
                    <td class="text-center">{{ $history->peminjaman->user->username }}</td>
                    <td class="text-center">{{ $history->peminjaman->barang->nama_barang}}</td>
                    <td class="text-center">{{ $history->peminjaman->waktu_pinjam }}</td>
                    <td class="text-center">{{ $history->pengembalian->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<script>
    new DataTable('#peminjaman');
</script>

@endsection
