<?php

namespace App\Http\Controllers;
use App\Order;
use App\Gudang;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

	public function payment(){
		return view('payment');
	}
	public function checkout(){
		return view('checkout');
	}
	public function index($id){

		 $gudang = Gudang::where('id_gudang', $id)->first();
		 return view('payment', compact('order'));
	}

}
