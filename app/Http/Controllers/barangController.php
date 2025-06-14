<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class barangController extends Controller
{
    public function index()
{
    $barang = barang::all();
    $penjualan = Penjualan::all();

    return view('admin', compact('barang', 'penjualan'));
}

    public function create(){
        return view('tambah');
        
    }

    public function store(Request $request){
        barang::create($request -> except(['token','submit']));
        return redirect('/admin');
    }

    public function edit($id){
        $barang = barang::find($id);
        return view('edit',compact(['barang']));
    }

    public function update($id, Request $request) {
        $barang = barang::find($id);
        $barang->update($request -> except(['token','submit']));
        return redirect('/admin');
        
    }

    public function destroy($id){
        $barang = barang::find($id);
        $barang->delete();
        return redirect('/admin');

    }

    public function cekBarang(){
        $barang = Barang::all();
        return view('cekbarang', compact('barang'));
    }

    public function help(){
        return view('help');
    }
}
