@extends('layout.main')
@section('title')
    <title>Dashboard</title>
@endsection
@section('content')

                <h4>Master Obat</h4>
                <hr>
                            @hasrole('admin')
                <a href="{{ route('create.obat') }}" class="btn btn-warning">Tambah data</a>
                            @endhasrole    

                <div class="table">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Obat</th>
                            <th scope="col">Tanggal Kadaluarsa</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Satuan</th>
                            <th scope="col">harga Beli</th>
                            <th scope="col">harga Jual</th>
                            @hasrole('admin')
                            <th scope="col">Opsi</th>
                            @endhasrole    
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ( $obats as $obat )
                            <tr>
                            <th scope="row">1</th>
                            <td>{{ $obat->nama_obat }}</td>
                            <td>{{ $obat->tanggal_kadaluarsa }}</td>
                            <td>{{ $obat->stok }}</td>
                            <td>{{ $obat->satuan }}</td>
                            <td>{{ $obat->harga_beli }}</td>
                            <td>{{ $obat->harga_jual }}</td>
                            @hasrole('admin')
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('edit.obat',['id' => $obat->id]) }}" class="btn btn-warning me-1">Edit</a>
                                    <a href="{{ route('delete.obat',['id' => $obat->id]) }}" class="btn btn-danger">Hapus</a>
                                </div>
                            </td>
                            @endhasrole
                            </tr>
                            @endforeach
                            
                        </tbody>
                        </table>
                </div>
@endsection