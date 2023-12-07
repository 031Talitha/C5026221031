<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangBelanjaController extends Controller
{
	public function index2()
	{
    	// mengambil data dari table keranjangbelanaj
		//$keranjangbelanja = DB::table('keranjangbelanja')->get();
        $keranjangbelanja = DB::table('keranjangbelanja')->get();

    	// mengirim data kurang belanja ke view index
		return view('index2',['keranjangbelanja' => $keranjangbelanja]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function beli()
	{

		// memanggil view tambah
		return view('beli');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->Jumlah,
			'Harga' => $request->Harga,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');

	}
    public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}
}














