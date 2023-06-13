<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStokKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_keluar', function (Blueprint $table) {
            $table->integer("id_keluar")->primary();
            $table->string("id_barang");
            $table->foreign("id_barang")->references("id_barang")->on("barang");
            $table->date("tanggal_keluar");
            $table->integer("jumlah");
            $table->string("keterangan");
            $table->unsignedInteger("id");
            $table->foreign("id")->references("id")->on("users");
            $table->string("id_gudang");
            $table->foreign("id_gudang")->references("id_gudang")->on("gudang");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stok_keluar');
    }
}
