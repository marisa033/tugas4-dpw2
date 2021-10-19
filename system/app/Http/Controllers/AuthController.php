<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
	function showlogin(){
		return view('login');
	}

	function processlogin(){
		return view();
	}

	function loguot(){
		return view();
	}

	function registration(){
		return view();
	}

	function forgotpassword(){
		return view();
	}

}