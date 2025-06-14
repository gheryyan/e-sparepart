<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        return view('order');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'Tgl_Faktur' => 'required|date',
            'No_Faktur' => 'required|string',
            'Nama_cust' => 'required|string',
            'Kode_Barang' => 'required|string',
            'Jumlah' => 'required|integer',
            'Harga_satuan' => 'required|numeric',
            'Total' => 'required|numeric',
        ]);

        Penjualan::create([
            'Tgl_Faktur' => $request->Tgl_Faktur,
            'No_Faktur' => $request->No_Faktur,
            'Nama_cust' => $request->Nama_cust,
            'barang_id' => $request->Kode_Barang,
            'Jumlah' => $request->Jumlah,
            'Harga_satuan' => $request->Harga_satuan,
            'Total' => $request->Total,
        ]);

        return redirect()->route('order.create')->with('success', 'Order berhasil disimpan, Terimakasih');
    }
}
