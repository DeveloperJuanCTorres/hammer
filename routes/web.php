<?php

use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/tienda', [App\Http\Controllers\HomeController::class, 'tienda'])->name('tienda');
Route::get('/nosotros', [App\Http\Controllers\HomeController::class, 'nosotros'])->name('nosotros');
Route::get('/contacto', [App\Http\Controllers\HomeController::class, 'contacto'])->name('contacto');
Route::get('/detalle', [App\Http\Controllers\HomeController::class, 'detalle'])->name('detalle');

Route::get('/tienda', [ShopController::class,'index'])->name('tienda');
Route::get('/tienda/productos', [ShopController::class,'productos'])->name('tienda.productos');

// Route::get('/tienda', [ShopController::class,'index'])->name('tienda');

// Route::get('/tienda/listado', [ShopController::class,'listado'])
//     ->name('tienda.listado');

// Route::get('/producto/{slug}', [ShopController::class,'detalle'])
//     ->name('producto.detalle');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
