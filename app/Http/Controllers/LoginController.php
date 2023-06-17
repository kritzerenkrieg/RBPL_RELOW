<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illumimate\Support\Facades\Mail;
use Illumimate\Support\Facades\Notification;

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

		public function forgotPassword(){
			return view('lupaPass');
		}
		public function resetPassword($token){
			return view('resetPassword', ['token' => $token]);
		}
		public function authenticatepw(Request $request){
			//return view('signin');
			$validated = $request->validate([
				'token' => 'required',
				'email' => 'required|email',
				'password' => 'required|min:8|confirmed',
			]);

			 $status = Password::reset(
				$request->only('email', 'password', 'password_confirmation', 'token'),
				function ($user, $password) {
					$user->forceFill([
						'password' => Hash::make($password)
					])->setRememberToken(Str::random(60));
					$user->save();

					event(new PasswordReset($user));
				}
			);
			if ($status == Password::PASSWORD_RESET){
				return redirect()->route('signin')->with('success', 'Password telah berhasil diubah, mohon login dengan password yang baru!');
			}
			else {
				return redirect()->back()
				->withInput($request->only('email'))
				->withErrors(['email'=>trans($response)]);
			}

			// return $status === Password::PASSWORD_RESET
			// 	? redirect()->route('signin')->with('status', "sukses!")
			// 	: back()->with('loginError', "Login gagal");
		}
		}
