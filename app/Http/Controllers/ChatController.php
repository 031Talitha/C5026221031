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

       // Define emoticons and their corresponding images
        $emoticons = [
        ':))' => '<img src="' . asset('/public/1.JPEG') . '">',
        ':3' => '<img src="' . asset('2.JPEG') . '">',
        ':P' => '<img src="' . asset('3.JPEG') . '">',
        ':C' => '<img src="' . asset('4.JPEG') . '">',
        ';)' => '<img src="' . asset('5.JPEG') . '">'
         ];

        // Loop through each chat message
        foreach ($chat as $c) {
        // Convert emoticons to images
        $c->pesan = str_replace(array_keys($emoticons), array_values($emoticons), $c->pesan);
        }

    	// mengirim data pegawai ke view index
		return view('indexchat',['chat' => $chat]);

	}

}
