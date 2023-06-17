<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGudangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->string("id_order")->primary();
            $table->foreign("harga_gudang")->references("id_gudang")->on("gudang");
            $table->foreign("nama")->references("id")->on("users");
            $table->string("nama_gudang");
            $table->string("harga_gudang");
            $table->string("lokasi_gudang");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gudang');
    }
}
