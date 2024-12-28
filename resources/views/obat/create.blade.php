@extends('layout.main')
@section('title')
    <title>Tambah Obat</title>
@endsection
@section('content')
                <h4>Tambah Obat</h4>
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        
    <form action="{{ route('store.obat') }}" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="nama_obat" id="floatingInput" >
            <label for="floatingInput">Nama Obat</label>
        </div>
        <div class="form-floating mb-3">
            <input type="date" class="form-control" name="tanggal_kadaluarsa" id="floatingInput" >
            <label for="floatingInput">Tanggal Kadaluarsa</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="stok" id="floatingInput" >
            <label for="floatingInput">Stok</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="satuan" id="floatingInput" >
            <label for="floatingInput">Satuan</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="harga_beli" id="floatingInput" >
            <label for="floatingInput">Harga Beli</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="harga_jual" id="floatingInput" >
            <label for="floatingInput">Harga Jual</label>
        </div>
        <button type="submit" class="btn btn-warning">Tambah Obat</button>
    </form>
    
                    </div>
                </div>
@endsection