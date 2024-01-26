<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Makanan;
use App\Models\Kategori;
use GuzzleHttp\Psr7\Query;

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

    public function view_makanan()
    {
        // query builder
        // $makanan = DB::table('makanans')->get();

        // eloquent
        $makanans = Makanan::all();

        // dd($makanans);

        return view('makanan', [
            'foods' => $makanans,
        ]);
    }

    public function test_query_builder()
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
           
        // ]);

        // Query untuk Select data table makanans
        // $result = DB::table('makanans')->where('id, 1')->get();
        // dd($result);

        // Query untuk delete data dari table makanans
        // DB::table('makanans')->where('id, 1')->delete();

        // Query untuk Update data dari table makanans
        // DB::table('makanans')->where('kode_makanan', 1)->update([
        //     'nama' => 'onde-onde',
        //     'kategori' => 'snack',
        //     'harga' => 10000,
        //     'ket' => '',
        // ]);

        return 'masuk test';
    }

    public function test_eloquent()
    {
        // SELECT DATA
        $makanans = Makanan::all();

        // dd($makanans);

        //INSERT DATA CARA 1
        // Makanan::create([
        //     'kode_makanan' => 'm001',
        //     'nama' => 'Intan',
        //     'kategori' => 'imut',
        //     'harga' => 100000000000,
        //     'ket' => 'perempuan',
        // ]);

        // INSERT DATA CARA 2
        // $makanan = new Makanan;
        // $makanan->kode_makanan = 'm100';
        // $makanan->nama = 'Kuaci';
        // $makanan->kategori = 'snack';
        // $makanan->harga = 13000;
        // $makanan->ket = 'tersedia';
        // $makanan->save();

        // Hapus data cara 1
        // Makanan::find('m001')->delete();

        // Hapus data cara 2
        // $makanan = Makanan::find('m001');
        // $makanan->delete();

        // Update data 
        // $makanan = Makanan::find('m100');
        // $makanan->nama = 'coklat';
        // $makanan->kategori = 'snack';
        // $makanan->harga = 20000;
        // $makanan->ket = 'tersedia';
        // $makanan->save();


        return 'masuk test';

    }
}
