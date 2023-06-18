<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
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
            $table->string("harga_gudang");
            $table->foreign("harga_gudang")->references("id_gudang")->on("gudang");
            $table->string("nama_gudang");
            $table->string("nama");
            $table->foreign("nama")->references("")->on("users");
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
        Schema::dropIfExists('order');
    }
}
