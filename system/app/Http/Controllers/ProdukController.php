<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class ProdukController extends Controller {
	function index(){
		$data['list_produk'] = Produk::all();
		return view('admin.produk.index', $data);

	}
	function create(){
		return view('admin.produk.create');

	}
	function store(){
		$produk = new Produk;
		$produk->Nama = request('nama');
		$produk->Harga = request('harga');
		$produk->Stok = request('stok');
		$produk->Detail = request('detail');
		$produk->save();

		return redirect('admin/produk')->with('success', 'Data Berhasil Ditambahkan');

	}
	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('admin.produk.show', $data);

	}
	function edit(Produk $produk){
		$data['produk'] = $produk;
		return view('admin.produk.edit', $data);

	}
	function update(Produk $produk){
		$produk->Nama = request('nama');
		$produk->Harga = request('harga');
		$produk->Stok = request('stok');
		$produk->Detail = request('detail');
		$produk->save();

		return redirect('admin/produk')->with('success', 'Data Berhasil Diedit');

	}
	function destroy(Produk $produk){
		$produk->delete();

		return redirect('admin/produk')->with('danger', 'Data Berhasil Dihapus');
	}

}