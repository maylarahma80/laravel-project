<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/admin/inputbuku', function () {
    return view('admin.inputbuku');
});

// Route::get('/admin/inputketagori', function () {
//     return view('admin.inputketagori');
// });
Route::get('/admin/inputkategori', [CategoryController::class, 'index'])
                                   ->name('admin.inputkategori');

Route::get('/admin/inputpenulis', function () {
    return view('admin.inputpenulis');
});
