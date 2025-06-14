<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanTable extends Migration
{
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id();
            $table->string('Tgl_Faktur');
            $table->string('No_Faktur');
            $table->string('Nama_cust');
            $table->unsignedBigInteger('barang_id'); 
            $table->foreign('barang_id')->references('id')->on('barang');
            $table->string('Jumlah')->nullable();
            $table->string('Harga_satuan')->nullable();
            $table->string('Total')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penjualan');
    }
}
