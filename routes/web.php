<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicaController;

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


/* Route::get('/', function () {
    return view('index');
}); */

Route::get('/', [MedicaController::class, 'index'])->name('inicio');

/* Route::get('/', function () {
    return view('farmacia.index');
})->name('inicio'); */

Route::get('/conocenos', function () {
    return view('farmacia.conocenos');
})->name('conocenos');

Route::get('/productosTemporada', function () {
    return view('productos.temporada');
})->name('productosDeTemporada');

Route::get('/productosDestacados', function () {
    return view('productos.destacados');
})->name('productosDestacados');

Route::get('/producto', function () {
    return view('productos.productoSimple');
})->name('producto');

Route::get('/envio', function () {
    return view('envio.envios');
})->name('envioADomicilio');

Route::get('/ofertas', function () {
    return view('productos.ofertas');
})->name('ofertas');


