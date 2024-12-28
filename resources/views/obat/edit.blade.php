@extends('layout.main')
@section('title')
    <title>Ubah Obat</title>
@endsection
@section('content')
                <h4>Ubah Obat</h4>
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        
    <form action="{{ route('update.obat',['id'=>$obat->id]) }}" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="nama_obat" id="floatingInput" value="{{ $obat->nama_obat }}" > 
            <label for="floatingInput">Nama Obat</label>
        </div>
        <div class="form-floating mb-3">
            <input type="date" class="form-control" name="tanggal_kadaluarsa" id="floatingInput" value="{{ $obat->tanggal_kadaluarsa }}">
            <label for="floatingInput">Tanggal Kadaluarsa</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="stok" id="floatingInput" value="{{ $obat->stok }}">
            <label for="floatingInput">Stok</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="satuan" id="floatingInput" value="{{ $obat->satuan }}">
            <label for="floatingInput">Satuan</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="harga_beli" id="floatingInput" value="{{ $obat->harga_beli }}">
            <label for="floatingInput">Harga Beli</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="harga_jual" id="floatingInput" value="{{ $obat->harga_jual }}">
            <label for="floatingInput">Harga Jual</label>
        </div>
        <button type="submit" class="btn btn-warning">Ubah Obat</button>
    </form>
    
                    </div>
                </div>
@endsection