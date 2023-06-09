<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class StockController extends Controller
{
   
    public function showStocks(){
        $user = User::findOrFail(auth()->id());
        $user->loadCount('stocks');
        $stocks = $user->stocks;
        $gudangCount = $user->stocks_count;
        $totalStok = $user->stocks()->sum('stok');
    
        //dd($stocks);
    
        return view('stock', compact('stocks', 'gudangCount', 'totalStok'));
        

        
    }


    //public function showStock(){
        
    //$stock = DB::table('stok')->get();

    //return view('stock',['stok' => $stock]);
    //}

    //
}
