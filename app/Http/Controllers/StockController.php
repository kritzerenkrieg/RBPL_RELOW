<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Stock;
use App\StokMasuk;
use App\StokKeluar;
use Carbon\Carbon;


class StockController extends Controller
{
   
    public function showStocks(){
        $user = User::findOrFail(auth()->id());
        $user->loadCount('stocks');
        $stocks = $user->stocks;
        $gudangCount = $user->stocks_count;
        $totalStok = $user->stocks()->sum('stok');
        $tanggal_update = Stock::pluck('tanggal_update');
    
        //dd($stocks);
    
        return view('stock', compact('stocks', 'gudangCount', 'totalStok'), ['tanggal_update' => $tanggal_update]);
        

        
    }

   /* public function grafik() {
        $user = User::findOrFail(auth()->id());

        $total_stok = stok_masuk::select(DB::raw("CAST(SUM(jumlah)as int)as jumlah"))
        ->GroupBy(DB::raw("Month(tanggal_masuk)"))
        ->pluck('jumlah');

        $bulan = stok_masuk::select(DB::raw("MONTHNAME(created_at)as bulan"))
        ->GroupBy(DB::raw("MONTHNAME(created_at)"))
        ->pluck('bulan');

        return view('grafikStock', compact('total_stok', 'bulan'));
    }*/
   
    public function grafik (){
        $user = User::findOrFail(auth()->id());
        $user->loadCount('stocks');
        $stocks = $user->stocks;
        $gudangCount = $user->stocks_count;
        $totalStok = $user->stocks()->sum('stok');
        $tanggal_update = Stock::pluck('tanggal_update');

        $masuk = StokMasuk::select(DB::raw("CAST(SUM(jumlah)as int)as masuk"))
        ->GroupBy(DB::raw("Month(tanggal_masuk)"))
        ->pluck('masuk');
        $bulan = StokMasuk::select(DB::raw("MONTHNAME(tanggal_masuk)as bulan"))
        ->GroupBy(DB::raw("MONTHNAME(tanggal_masuk)"))
        ->orderByRaw("MONTH(tanggal_masuk)")
        ->pluck('bulan');

        $keluar = StokKeluar::select(DB::raw("CAST(SUM(jumlah)as int)as keluar"))
        ->GroupBy(DB::raw("Month(tanggal_keluar)"))
        ->pluck('keluar');

        return view('grafikStock', compact('stocks', 'gudangCount', 'totalStok', 'tanggal_update', 'masuk', 'bulan', 'keluar'));    
    }
    //
}
