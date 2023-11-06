<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        $a = 3;
        $a = 3;
        $a = 3;
        return "<h1>Hasil Perkalian = " ; (string)$c ; "</h1>";
    }

    public function showBlog () {
        $nama = "Ridho";
        $alamat = "Surabaya";
        $umur = 19;
        return view('blog', ['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);
    }
}
