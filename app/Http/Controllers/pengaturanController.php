<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class pengaturanController extends Controller
{

	public function pengaturan(){
		return view('pengaturan');
	}
    public function edit(){
		
		$user = User::findorFail(auth()->id());
		return view('edit', compact('user'));
	}
	
	public function update(Request $request, $id)
	{
		// Validate the input data
		$validatedData = $request->validate([
			'nama' => 'required|string',
			'nohp'=>'required|string',
			'email' => 'required|email|unique:users,email,' . $id,
			// Add more validation rules for other fields
		]);

		// Find the user by ID
		$user = User::findOrFail($id);

		// Update the user's attributes
		$user->nama = $validatedData['nama'];
		$user->email = $validatedData['email'];
		// Update other attributes as needed

		// Save the changes
		$user->save();

		// Redirect to a success page or return a response
		return redirect()->route('user_settings')->with('success', 'User updated successfully');
	}
}
