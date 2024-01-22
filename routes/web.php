<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/my_about', function () {
//     return view('about');
// });

// Route::get('/my_home', function () {
//     return view('home');
// });

// Route::get('/my_contact', function () {
//     return view('contact');
// });

// Route::get('/hallo', function() {
//     return view('hallo', ['nama' => 'IK2', 'alamat' => 'jl. thamrin 35A', 'title' => 'Hallo']);
// } );

// Route::get('/login', function() {
//     $nama = 'bambang';
//     // $kelas = '<h1>IK2</h1>';

//     $lampu = 1; // 0 = lampu mati, 1 = lampu nyala

//     $kelas = env('KELAS', 'Data kelas tidak ada');

//     $nilai = "B";

//     $perulangan_for = 100;

//     $hobi_banyak = [
//         'Bermain Bola',
//         'Bermain Air',
//         'Bermain Badminton',
//         'Membaca',
//         'Memasak',
//         'Bermain musik',
//     ];

//     return view('admin.login', [
//         'nama' => $nama,
//         'kelas' => $kelas,
//         'lampu' => $lampu,
//         "nilai" => $nilai,
//         'limit' => $perulangan_for,
//         'hobbies' => $hobi_banyak,
//     ]);
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/add', [HomeController::class, 'tambah']);

Route::post('/save', [HomeController::class, 'simpan']);



Route::get('/test', [HomeController::class, 'test']);

// Route::get('/test/{id}', [HomeController::class, 'test']);