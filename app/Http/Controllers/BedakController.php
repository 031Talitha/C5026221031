<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BedakController extends Controller
{
	public function indexbedak()
	{
    	// mengambil data dari table bedak
		//$bedak = DB::table('bedak')->get();
        $bedak = DB::table('bedak')->paginate(15); //agar tersortir 15 halaman

    	// mengirim data bedak ke view index
		return view('indexbedak',['bedak' => $bedak]);

	}

	// method untuk menampilkan view form tambah bedak
	public function tambahbedak()
	{

		// memanggil view tambah
		return view('tambahbedak');

	}

	// method untuk insert data ke table bedak
	public function store(Request $request)
	{
		// insert data ke table bedak
		DB::table('bedak')->insert([
			'kodebedak' => $request->kodebedak,
			'merkbedak' => $request->merkbedak,
			'stockbedak' => $request->stockbedak,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman bedak
		return redirect('/bedak');

	}


	// method untuk edit data bedak
	public function editbedak($kodebedak)
	{
		// mengambil data bedak berdasarkan id yang dipilih
		$bedak = DB::table('bedak')->where('kodebedak',$kodebedak)->get();
		// passing data bedak yang didapat ke view edit.blade.php
		return view('editbedak',['bedak' => $bedak]);

	}

    // update data bedak
	public function update(Request $request)
	{
		// update data bedak
		DB::table('bedak')->where('kodebedak',$request->kodebedak)->update([
			'merkbedak' => $request->merkbedak,
			'stockbedak' => $request->stockbedak,
			'tersedia' => $request->tersedia,

		]);
		// alihkan halaman ke halaman bedak
		return redirect('/bedak');
	}


	// method untuk hapus data bedak
	public function hapus($kodebedak)
	{
		// menghapus data bedak berdasarkan id yang dipilih
		DB::table('bedak')->where('kodebedak',$kodebedak)->delete();

		// alihkan halaman ke halaman bedak
		return redirect('/bedak');
	}


}
