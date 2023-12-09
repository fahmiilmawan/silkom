@extends('layout.master')
@section('main-content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Form Tambah User</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form action="{{ route('userStore') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" name="username" class="form-control input-default " placeholder="Masukkan Username....">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" name="email" class="form-control input-default " placeholder="Masukkan Email....">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="password" name="password" class="form-control input-default " placeholder="Masukkan Password....">
                    </div>
                    <div class="form-group col-md-6">
                        <select name="role" class="form-control" id="">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-success">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection
