<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        // Query Builder
        // $makanans = DB::table('makanan')->get();
        
        // Eloquent
        $makanans = Makanan::all();

        // dd($makanans);
        return view('menu', [
            'data' => $makanans,   
        ]);
    }

    public function add()
    {
        return view('form_makanan');
    }

    public function edit($id)
    {
        $makanan = Makanan::find($id);

        return view('form_makanan', [
            'data' => $makanan,
        ]);
    }
    
    public function save(Request $req)
    {
        // dd($req);

        $old_kode = @$req->old_kode;

        if ($old_kode) {
            
            // Mode Edit

            // Eloquent
            Makanan::where('kode_makanan', $old_kode)->update([
                'kode_makanan' => $req->kode,
                'nama' => $req->nama,
                'kategori' => $req->kategori,
                'harga' => $req->harga,
                'ket' => $req->ket,
            ]);

        } else {
            
            // Mode Add

            // Query Builder
            // DB::table('makanans')->insert([
            //     'kode_makanan' => $req->kode,
            //     'nama' => $req->nama,
            //     'kategori' => $req->kategori,
            //     'harga' => $req->harga,
            //     'ket' => $req->ket,
            // ]);

            // Eloquent 1
            Makanan::create([
                'kode_makanan' => $req->kode,
                'nama' => $req->nama,
                'kategori' => $req->kategori,
                'harga' => $req->harga,
                'ket' => $req->ket,
            ]);

            // Eloquent 2
            // $makanan = new Makanan;
            // $makanan->kode_makanan = $req->kode;
            // $makanan->nama = $req->nama;
            // $makanan->kategori = $req->kategori;
            // $makanan->harga = $req->;
            // $makanan->ket = $req->ket;
            // $makanan->save();
        }

        return redirect('/menu');
    }

    public function delete($id)
    {
        // dd($id);

        // Query Builder
        // DB::table('makanans')->where('kode_makanan', $id)->delete();

        // Eloquent 1
        Makanan::find($id)->delete();

        // Eloquent 2
        // Makanan::where('kode_makanan', $id)->delete();

        return redirect('/menu');
    }
}