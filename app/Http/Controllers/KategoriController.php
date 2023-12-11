<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{
    public function index()
    {
        $kategori = DB::table('kategori')->paginate(10);
        return view('indexkategori', ['kategori' => $kategori]);
    }

    public function view(Request $request)
    {
        $id = $request->input('kategori');
        $kategori = DB::table('kategori')->where('ID', $id)->first();
        return view('hasilkategori', ['kategori' => $kategori]);
    }
}
