@extends('layout.layout')

@section('content')
<title>E Sparepart</title>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand">E Sparepart</a>
                <a class="nav-link" href="/help">Help</a>
    </div>
        </nav>
        <div class="content">
            <div class="main">
                <h2>Selamat Datang 👋,<br>Di E Sparepart</h2> <br>
                <a href="/cekbarang" class="btn btn-primary">Cek ketersediaan Barang</a>
                <a href="/order" class="btn btn-primary">Order</a>
            </div>
        </div>
@endsection
<style>
    .content {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
        margin-top: 20px;
    }

    .main {
        text-align: center;
    }

    button {
        margin: 10px; 
    }
</style>