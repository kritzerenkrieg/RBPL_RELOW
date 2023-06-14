<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStokMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_masuk', function (Blueprint $table) {
            $table->integer("id_masuk")->primary();
            $table->string("id_barang");
            $table->foreign("id_barang")->references("id_barang")->on("barang");
            $table->date("tanggal_masuk");
            $table->integer("jumlah");
            $table->string("keterangan");
            $table->foreignId("id");
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
        Schema::dropIfExists('stok_masuk');
    }
}
