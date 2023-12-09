@extends('layout.master')
@section('main-content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Form Ubah User</h4>
    </div>
    <div class="card-body">
        <div class="basic-form">
            <form action="{{ route('userUpdate',$dataUser->id) }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" name="username" class="form-control input-default " value="{{ $dataUser->username }}">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" name="email" class="form-control input-default " value="{{ $dataUser->email }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="password" name="password" class="form-control input-default " placeholder="Masukkan Password....">
                    </div>
                    <div class="form-group col-md-6">
                        <select name="role" class="form-control" id="">
                            @foreach ($dataUserAll as $userAll )
                                <option value="{{ $userAll->role }}"{{ (old('role', $dataUser->role) == $userAll->role) ? 'selected' : '' }}>
                                    {{ $userAll->role }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button class="btn btn-success">Ubah</button>
            </form>
        </div>
    </div>
</div>
@endsection
