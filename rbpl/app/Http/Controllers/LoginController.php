<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

	public function signup(){
		return view('signup');
	}
	public function signin(){
		return view('signin');
	}
	public function store(Request $request){
		$validatedData = $request->validate([
			'nama' => 'required|min:3|max:100',
			'email' => 'required|email:rfc,dns',
			'nohp' => 'required|min:9|max:14',
			'password' => 'required|min:8|max:100',
		]);

	$validatedData['password'] = Hash::make($validatedData['password']);

	user::create($validatedData);

	$request->session()->flash('success', 'Registrasi berhasil! silahkan login'); 

	    return redirect('signin');
	}
	public function authenticate(Request $request) {
		$credentials = $request->validate([
            'email' =>'required|email:rfc,dns',
            'password' =>'required|min:8|max:100',
        ]);
		
		if(Auth::attempt($credentials)) {
			$request->session()->regenerate();
			return redirect()->intended('landing');
		}

		return back()->with('loginError', 'Login gagal');

			}
			public function logout(Request $request){
				Auth::logout();
				$request->session()->invalidate();
				$request->session()->regenerateToken();
				return redirect('signin');
			}

	}

	


