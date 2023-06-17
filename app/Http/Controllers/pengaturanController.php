<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class pengaturanController extends Controller
{

	public function pengaturan(){
		return view('pengaturan');
	}
    public function edit(){
		return view('edit');
	}
}
