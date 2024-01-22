<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function tambah()
    {
        return view('input');
    }

    public function simpan(Request $request)
    {
        // $nama = 'IK2';
        // return view('test', ['nama' => $nama, 'id' => $id ]);

        $nama = $request->input('nama');
        $kategori = $request->input('kategori');
        $harga = $request->input('harga');
        $ket = $request->input('ket');

        return view('result', [
            'nama' => $nama,
            'kategori' => $kategori,
            'harga' => $harga,
            'keterangan' => $ket,
        ]);
    }

    public function test()
    {
        // query builder untuk insert 1 data ke dalam table makanans
        // DB::table('makanans')->insert([
        //     'nama' => 'Burger',
        //     'kategori' => 'makanan',
        //     'harga' => '12.000',
        //     'ket' => 'dijual',
        // ])

        // query builder untuk insert 1 data ke dalam table makanans
        // DB::table('makanans')->insert([
        //    [ 
        //        'nama' => 'Burger',
        //        'kategori' => 'makanan',
        //        'harga' => '12.000',
        //        'ket' => 'dijual'                                                                            
        //    ],
        //    [
        //        'nama' => 'Burger',
        //        'kategori' => 'makanan',
        //        'harga' => '12.000',
        //        'ket' => 'dijual'            
        //    ],
        //    [
        //        'nama' => 'Burger',
        //        'kategori' => 'makanan',
        //        'harga' => '12.000',
        //        'ket' => 'dijual'            
        //    ],
        //    [
        //     'nama' => 'Burger',
        //     'kategori' => 'makanan',
        //     'harga' => '12.000',
        //     'ket' => 'dijual'            
        //    ],
           
        // ])

    }
}
