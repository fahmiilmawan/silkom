@extends('layout.master')
@section('main-content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Form Ubah Ruangan</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form action="{{ route('ruanganUpdate',$dataRuangan->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="nama_ruangan" class="form-control input-default " placeholder="Masukkan Nama Ruangan" value="{{ $dataRuangan->nama_ruangan }}">
                </div>
                <button class="btn btn-primary">Ubah</button>
            </form>
        </div>
    </div>
</div>
@endsection
