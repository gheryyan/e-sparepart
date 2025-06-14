<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('Kode_Barang');
            $table->string('Nama_Barang');
            $table->string('Harga_Jual');
            $table->string('Harga_Beli');
            $table->string('satuan')->nullable();
            $table->enum('kategori',['Tersedia Untuk Mobil & Motor','Hanya untuk Mobil','Hanya untuk Motor','Tidak tersedia']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
