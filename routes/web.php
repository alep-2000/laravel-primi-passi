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
        'name' => 'Alessio',
        'surname' => 'Piras',
        'age' => 22
    ];

    return view('home', $data);
});

Route::get('/products', function () {
    $data = [
        'name_product' => 'Backpack',
        'type' => 'school_supplies',
        'prize' => 30
    ];

    return view('products', $data);
});

Route::get('/contacts', function () {
    $data = [
        'name' => 'Giuseppe',
        'surname' => 'Leonardi',
        'mail' => 'giuseppe.leonardi67@gmail.com',
        'telephone_number' => 3289657410
    ];

    return view('contacts', $data);
});