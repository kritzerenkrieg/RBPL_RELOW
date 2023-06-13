<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->foreignId("id");
            $table->string("id_barang");
            $table->foreign("id_barang")->references("id_barang")->on("barang");
            $table->integer("stok");
            $table->string("id_gudang");
            $table->foreign("id_gudang")->references("id_gudang")->on("gudang");
            $table->timestamp("tanggal_update");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
