@extends('layout.layout')

@section('content')
<title>Halaman Master/Admin</title>
<div class="container">
    <h2>Data Barang</h2>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Satuan</th>
                <th>Kategori</th>
                <th>Menu</th>
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
                <td>
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a class="btn btn-outline-primary" href="/admin/{{$b->id}}/edit">Edit</a>
                        <form action="/admin/{{$b->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <input class="btn btn-outline-primary" type="submit" value="Delete">
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a type="button" class="btn btn-info" href="admin/create">Tambah Data Barang</a>
    <a type="button" class="btn btn-info" href="/">Halaman Depan</a>
</div>
<h2>Data Penjualan</h2>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Tanggal Faktur</th>
                <th>No Faktur</th>
                <th>Nama Customer</th>
                <th>Kode Barang</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Total</th>
        </thead>
        <tbody>
            
            @foreach ($penjualan as $p)
            <tr>
                <td>{{$p->Tgl_Faktur}}</td>
                <td>{{$p->No_Faktur}}</td>
                <td>{{$p->Nama_cust}}</td>
                <td>{{$p->barang_id}}</td>
                <td>{{$p->Jumlah}}</td>
                <td>{{$p->Harga_satuan}}</td>
                <td>{{$p->Total}}</td>
                <td>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
