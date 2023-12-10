<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FlashdiskController extends Controller
{
    public function index()
    {
        $flashdisk = DB::table('flashdisk')->paginate(10);
        return view('indexflashdisk', ['flashdisk' => $flashdisk]);
    }

    public function tambah()
    {

        return view('tambahflashdisk');
    }

    public function store(Request $request)
    {
        DB::table('flashdisk')->insert([
            'kodeflashdisk' => $request->kodeflashdisk,
            'merkflashdisk' => $request->merkflashdisk,
            'stockflashdisk' => $request->stockflashdisk,
            'tersedia' => $request->has('is_checked') ? 'Y' : 'N'
        ]);
        return redirect('/flashdisk');
    }


    public function edit($id)
    {

        $flashdisk = DB::table('flashdisk')->where('kodeflashdisk', $id)->get();
        return view('editflashdisk', ['flashdisk' => $flashdisk]);
    }


    public function update(Request $request)
    {
        DB::table('flashdisk')->where('kodeflashdisk', $request->id)->update([
            'merkflashdisk' => $request->merkflashdisk,
            'stockflashdisk' => $request->stockflashdisk,
            'tersedia' => $request->has('is_checked') ? 'Y' : 'N'
        ]);
        return redirect('/flashdisk');
    }


    public function hapus($id)
    {
        DB::table('flashdisk')->where('kodeflashdisk', $id)->delete();
        return redirect('/flashdisk');
    }

    public function cari(Request $request)
    {

        $cari = $request->cari;
        $flashdisk = DB::table('flashdisk')
            ->where('merkflashdisk', 'like', "%" . $cari . "%")
            ->paginate();

        return view('indexflashdisk', ['flashdisk' => $flashdisk]);
    }
    public function view($id)
    {
        $flashdisk = DB::table('flashdisk')->where('kodeflashdisk', $id)->get();
        return view('viewflashdisk', ['flashdisk' => $flashdisk]);
    }
}
