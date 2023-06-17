<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Gudang;

class LandingController extends Controller
{

    public function landing(){
        $gudang = DB::table('gudang')->get();
        $gudang = DB::table('gudang')->paginate(3);
        return view('landing',['gudang' => $gudang]);
    }

    public function dashboard(){
        return view('stock');
    }

    public function about(){
        return view('about');
    }

}
