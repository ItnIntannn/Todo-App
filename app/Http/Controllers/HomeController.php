<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function test($id = 0)
    {
        $nama = 'IK2';

        return view('test', ['nama' => $nama, 'id' => $id ]);
    }
}
