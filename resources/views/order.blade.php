@extends('layout.layout')

@section('content')
<title>Order Barang</title>
<div class="container">
    <h2>Form Order Barang</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('order.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="Tgl_Faktur" class="form-label">Tanggal Faktur</label>
            <input type="date" class="form-control" id="Tgl_Faktur" name="Tgl_Faktur" required>
        </div>
        <div class="mb-3">
            <label for="No_Faktur" class="form-label">Nomor Faktur</label>
            <input type="text" class="form-control" id="No_Faktur" name="No_Faktur" required>
        </div>
        <div class="mb-3">
            <label for="Nama_cust" class="form-label">Nama Customer</label>
            <input type="text" class="form-control" id="Nama_cust" name="Nama_cust" required>
        </div>
        <div class="mb-3">
            <label for="Kode_Barang" class="form-label">Kode Barang</label>
            <input type="text" class="form-control" id="Kode_Barang" name="Kode_Barang" required>
        </div>
        <div class="mb-3">
            <label for="Jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="Jumlah" name="Jumlah" required>
        </div>
        <div class="mb-3">
            <label for="Harga_satuan" class="form-label">Harga Satuan</label>
            <input type="number" class="form-control" id="Harga_satuan" name="Harga_satuan" required>
        </div>
        <div class="mb-3">
            <label for="Total" class="form-label">Total</label>
            <input type="number" class="form-control" id="Total" name="Total" required>
        </div>
        <button type="submit" class="btn btn-primary">Order</button>
        <a href="/" class="btn btn-primary">Kembali</a>
    </form>
</div>
@endsection
