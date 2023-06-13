<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStokKeluarTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE TRIGGER kurangStok AFTER INSERT ON `stok_keluar` FOR EACH ROW
            BEGIN
            -- Calculate the new stock value
            SET @new_stock := (SELECT stok - NEW.jumlah FROM stocks WHERE id_barang = NEW.id_barang AND id_gudang = NEW.id_gudang AND id = NEW.id);

            -- Update the stocks table only if the new stock value is not negative
            IF (@new_stock >= 0) THEN
                UPDATE stocks
                SET stok = @new_stock
                WHERE id_barang = NEW.id_barang
                AND id_gudang = NEW.id_gudang
                AND id = NEW.id;
            ELSE
                -- You can handle the case when the stock becomes negative here
                -- For example, you can throw an error or log a warning
                -- This example throws an error message
                SIGNAL SQLSTATE '45000'
                    SET MESSAGE_TEXT = 'Insufficient stock.';
            END IF;
            END
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP TRIGGER kurangStok;");
        

    }
}
