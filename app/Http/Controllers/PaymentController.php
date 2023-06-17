<?php

namespace App\Http\Controllers;
use App\Order;
use App\Gudang;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

	// public function payment(){
	// 	return view('payment');
	// }
	public function checkout(){
		return view('checkout');
	}
	public function index($id){

		 $gudang = Gudang::where('id_gudang', $id)->first();
		 return view('payment', compact('order'));
	}

	public function payment($id)
    {
        // Retrieve the payment details based on the $id
        $payment = Payment::find($id);

        // Perform the payment processing logic here
        // For example, you can create a new payment record in the database,
        // update existing payment status, or integrate with a payment gateway

        // Return a response or redirect to a payment success page
        return view('payment', ['id' => $payment->id]);
    }

}
