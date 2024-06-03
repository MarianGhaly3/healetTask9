<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\healet;

Route::get('/', function () {
    return view('index');
});

Route::get('index', [healet::class, 'index'])->name('index');

Route::get('about', [healet::class, 'about'])->name('about');
Route::get('shop', [healet::class, 'shop'])->name('shop');
Route::get('blog', [healet::class, 'blog'])->name('blog');



