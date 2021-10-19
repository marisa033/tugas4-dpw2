<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

	function showBeranda(){
		return view('admin.beranda');
	}

	function showProduk(){
		return view('admin.produk.index');
	}

	function showKategori(){
		return view('admin.kategori.index');
	}

	function showProfil(){
		return view('admin.profil.index');
	}


}
