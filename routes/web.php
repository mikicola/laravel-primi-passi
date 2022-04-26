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

Route::get('/', function () {
    $data = [
        'name' => 'Mr. Mondo',
    ];
    return view('home', $data);
});

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/products', function () {
    return view('products');
})->name('products');

