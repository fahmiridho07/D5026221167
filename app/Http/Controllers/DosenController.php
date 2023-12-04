<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index()
{
    $a = 3;
    $b = 4; // Assuming you want to multiply $a by $b
    $c = $a * $b; // Perform the multiplication operation
    $resultString = "<h1>Hasil Perkalian = " . $c . "</h1>";

    return $resultString; // Return the string containing the result
}

    public function showBlog($nama, $alamat, $umur)
    {
        $nama = "Ridho";
        $alamat = "Surabaya";
        $umur = 19;
        return view('blog', ['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);
    }

    public function shownama($nama)
    {
        return "Anda telah mengisikan : " . $nama; //$nama itu sama dengan {nama} di web.php
    }

    public function formulir()
    {
        //cek soal hak akses
        return view('formulir');
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;
}
}
