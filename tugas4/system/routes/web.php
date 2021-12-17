<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('client.index');
});

Route::get('/about', function () {
    return view('client.about');
});

Route::get('/contact', function () {
    return view('client.contact');
});

Route::get('/shoes', function () {
    return view('client.shoes');
});

Route::get('/Login', function () {
    return view('client.Login');
});
Route::get('/blog', function () {
    return view('client.blog');
});

Route::get('/user', function () {
    return view('client.section.user');
});
Route::get('/my profil', function () {
    return view('client.my profil');
});
Route::get('/logout', function () {
    return view('client.Login');
});

Route::get('/dashboard', function () {
    return view('client.dashboard');
});
Route::get('/kategori', function () {
    return view('client.kategori');
});


Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);
