@extends('layout.layout')

@section('content')
<title>Ketersediaan Barang</title>
<div class="container">
    <h2>Data Ketersediaan Stok Barang</h2>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Satuan</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $b)
            <tr>
                <td>{{$b->Kode_Barang}}</td>
                <td>{{$b->Nama_Barang}}</td>
                <td>{{$b->Harga_Jual}}</td>
                <td>{{$b->Harga_Beli}}</td>
                <td>{{$b->satuan}}</td>
                <td>{{$b->kategori}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/order" class="btn btn-primary">Order</a>
</div>
@endsection
