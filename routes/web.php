<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::prefix('admin')->as('admin.')->group(function(){
// Route::resource('products',ProductController::class);
// });

Route::resource('tests',TestController::class);