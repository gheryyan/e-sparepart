@extends('layout.layout')

@section('content')
<title>Edit Data</title>
<div class="container">
    <h1>Edit Data</h1>
    <form action="/admin/{{$barang->id}}" method="POST">
        @method('put')
        @csrf
        
        <div class="mb-3">
            <label for="Kode_Barang" class="form-label">Kode Barang</label>
            <input type="text" name="Kode_Barang" class="form-control" placeholder="Kode Barang" value="{{$barang->Kode_Barang}}">
        </div>
        
        <div class="mb-3">
            <label for="Nama_Barang" class="form-label">Nama Barang</label>
            <input type="text" name="Nama_Barang" class="form-control" placeholder="Nama Barang" value="{{$barang->Nama_Barang}}">
        </div>

        <div class="mb-3">
            <label for="Harga_Jual" class="form-label">Harga Jual</label>
            <input type="text" name="Harga_Jual" class="form-control" placeholder="Harga Jual" value="{{$barang->Harga_Jual}}">
        </div>

        <div class="mb-3">
            <label for="Harga_Beli" class="form-label">Harga Beli</label>
            <input type="text" name="Harga_Beli" class="form-control" placeholder="Harga Beli" value="{{$barang->Harga_Beli}}">
        </div>

        <div class="mb-3">
            <label for="satuan" class="form-label">Satuan</label>
            <input type="text" name="satuan" class="form-control" placeholder="Satuan" value="{{$barang->satuan}}">
        </div>

        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select name="kategori" class="form-select">
                <option value="">Jenis Kategori</option>
                <option value="Tersedia Untuk Mobil & Motor" {{ $barang->kategori == 'Tersedia Untuk Mobil & Motor' ? 'selected' : '' }}>Mobil & Motor</option>
                <option value="Hanya untuk Mobil" {{ $barang->kategori == 'Hanya untuk Mobil' ? 'selected' : '' }}>Mobil only</option>
                <option value="Hanya untuk Motor" {{ $barang->kategori == 'Hanya untuk Motor' ? 'selected' : '' }}>Motor only</option>
                <option value="Tidak Tersedia" {{ $barang->kategori == 'Tidak Tersedia' ? 'selected' : '' }}>Tidak tersedia</option>
            </select>
        </div>

        <div class="mb-3">
            <input type="submit" name="submit" class="btn btn-primary" value="Update">
        </div>
    </form>
</div>
@endsection
