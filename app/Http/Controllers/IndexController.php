<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class IndexController extends Controller
{
	public function index()
	{
    		// mengambil data dari table gudang
		$gudang = DB::table('gudang')->get();
		$gudang = DB::table('gudang')->simplePaginate();
 
    		// mengirim data gudang ke view index
		return view('index',['gudang' => $gudang]);
 
	}
 
	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table gudang sesuai pencarian data
		$gudang = DB::table('gudang')
		->where('lokasi_gudang','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data gudang ke view index
		return view('index',['gudang' => $gudang]);
 
	}
 
}