<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ChatController extends Controller
{
	public function indexchat()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $chat = DB::table('chat')->get();


    	// mengirim data pegawai ke view index
		return view('indexchat',['chat' => $chat]);

	}

}
