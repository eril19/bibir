<?php

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


Route::get('/', [App\Http\Controllers\HappyBookStoreController::class , 'main']);
Route::get('/action', [App\Http\Controllers\HappyBookStoreController::class , 'action']);
Route::get('/horror', [App\Http\Controllers\HappyBookStoreController::class , 'horror']);
Route::get('/fantasy', [App\Http\Controllers\HappyBookStoreController::class , 'fantasy']);
Route::get('/comedy', [App\Http\Controllers\HappyBookStoreController::class , 'comedy']);
Route::get('/drama', [App\Http\Controllers\HappyBookStoreController::class , 'drama']);
Route::get('/romance', [App\Http\Controllers\HappyBookStoreController::class , 'romance']);
Route::get('/history', [App\Http\Controllers\HappyBookStoreController::class , 'history']);
Route::get('/thriller', [App\Http\Controllers\HappyBookStoreController::class , 'thriller']);
Route::get('/scifi', [App\Http\Controllers\HappyBookStoreController::class , 'scifi']);
Route::get('/mystery', [App\Http\Controllers\HappyBookStoreController::class , 'mystery']);

Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/noData', function () {
    return view('404');
});

Route::get('/detail', function () {
    return view('detail');
});

// Route::get('/1', function () {
//     return view('buku1');
// });

// Route::get('/2', function () {
//     return view('buku2');
// });

// Route::get('/3', function () {
//     return view('buku3');
// });

// Route::get('/4', function () {
//     return view('buku4');
// });

// Route::get('/5', function () {
//     return view('buku5');
// });

// Route::get('/6', function () {
//     return view('buku6');
// });

// Route::get('/7', function () {
//     return view('buku7');
// });

// Route::get('/8', function () {
//     return view('buku8');
// });

// Route::get('/9', function () {
//     return view('buku9');
// });


