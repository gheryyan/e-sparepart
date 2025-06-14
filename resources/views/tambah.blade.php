@extends('layout.layout')

@section('content')
<title>Add Data</title>
<div class="container">
    <h1>Tambah Data</h1>
    <form action="/admin/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="Kode_Barang" class="form-label">Kode Barang</label>
            <input type="text" name="Kode_Barang" class="form-control"> 
        </div>
        
        <div class="mb-3">
            <label for="Nama_Barang" class="form-label">Nama Barang</label>
            <input type="text" name="Nama_Barang" class="form-control"> 
        </div>

        <div class="mb-3">
            <label for="Harga_Jual" class="form-label">Harga Jual</label>
            <input type="text" name="Harga_Jual" class="form-control"> 
        </div>

        <div class="mb-3">
            <label for="Harga_Beli" class="form-label">Harga Beli</label>
            <input type="text" name="Harga_Beli" class="form-control"> 
        </div>

        <div class="mb-3">
            <label for="satuan" class="form-label">Satuan</label>
            <input type="text" name="satuan" class="form-control"> 
        </div>

        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select name="kategori" class="form-select">
                <option value="">Jenis Kategori</option>
                <option value="Tersedia Untuk Mobil & Motor">Mobil & Motor</option>
                <option value="Hanya untuk Mobil">Mobil only</option>
                <option value="Hanya untuk Motor">Motor only</option>
                <option value="Tidak Tersedia">Tidak tersedia</option>
            </select>
        </div>

        <div class="mb-3">
            <input type="submit" name="submit" class="btn btn-primary" value="Save">
        </div>
    </form>
</div>
@endsection
