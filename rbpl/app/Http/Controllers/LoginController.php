<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LoginController extends Controller
{

	public function signup(){
		return view('signup');
	}
	public function signin(){
		return view('signin');
	}

}
