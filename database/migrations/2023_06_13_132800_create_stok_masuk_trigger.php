<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStokMasukTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER tambahStok AFTER INSERT ON `stok_masuk` FOR EACH ROW
            BEGIN
            -- Check if the combination of id_barang and id_gudang already exists
            IF EXISTS (
                SELECT 1
                FROM stocks
                WHERE id_barang = NEW.id_barang
                AND id_gudang = NEW.id_gudang
                AND id = NEW.id
            ) THEN
                -- Update the existing row in the stocks table
                UPDATE stocks
                SET stok = stok + NEW.jumlah
                WHERE id_barang = NEW.id_barang
                AND id_gudang = NEW.id_gudang
                AND id = NEW.id;
            ELSE
                -- Insert a new row into the stocks table
                INSERT INTO stocks (id, id_barang, stok, id_gudang)
                VALUES (NEW.id, NEW.id_barang, NEW.jumlah, NEW.id_gudang);
            END IF;
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP TRIGGER tambahStok;");
    }
}
