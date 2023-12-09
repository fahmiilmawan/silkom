@extends('layout.master')
@section('main-content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Data User</h4>
            <p class="mb-0">Sistem Informasi Laboratorium Komputer</p>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">

        <table id="RuanganDatatables" class="display" style="width:100%">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Username</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Role</th>
                    <th class="text-center" style="text-decoration: none">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach( $dataUser as $user )
                <tr>
                    <td class="text-center">{{ $i++ }}</td>
                    <td class="text-center">{{ $user->username }}</td>
                    <td class="text-center">{{ $user->email }}</td>
                    <td class="text-center">{{ $user->role }}</td>
                    <td class="text-center" class="text-center">
                        <a href="{{ route('userUpdatePage',$user->id)}}" class="btn btn-primary">Ubah</a> |
                        {{-- <a href="{{ route('userDelete',$user->id)}}" class="btn btn-danger">Hapus</a> --}}
                    </td>
                </tr>
                @endforeach
        </table>
        <span><a href="{{ route('userCreatePage') }}" class="btn btn-success">Tambah</a></span>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script>
    new DataTable('#RuanganDatatables');
</script>

@endsection
