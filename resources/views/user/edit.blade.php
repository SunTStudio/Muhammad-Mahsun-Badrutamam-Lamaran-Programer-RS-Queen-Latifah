@extends('layout.main')
@section('title')
    <title>Dashboard</title>
@endsection
@section('content')
<div class="row">
    <div class="col">
        <h3>Edit Profile Pengguna</h3>
        <hr>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="nama_obat" id="floatingInput" disabled value="{{ $pengguna->name }}">
            <label for="floatingInput">Nama Pengguna</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="nama_obat" id="floatingInput" disabled value="{{ $pengguna->email }}" >
            <label for="floatingInput">Email Pengguna</label>
        </div>
        <div class="d-flex">
            <a href="#" class="btn btn-warning">Edit</a>
        </div>
    </div>
</div>
@endsection