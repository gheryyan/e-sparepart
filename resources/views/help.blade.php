@extends('layout.layout')

@section('content')
<title>Bantuan</title>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand">E Sparepart</a>
            </div>
        </nav>
        <div class="content">
            <div class="main">
                <h2>Butuh Bantuan?, Silahkan Hubungi</h2> <br>
                <h2>esparepart@help.go.id</h2>
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