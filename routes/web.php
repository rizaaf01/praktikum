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
    return view('welcome');
});

Route::get('/biodata', function () {
    $YGY=[
        'nama' => 'Riza Akmal Fauzi',
        'lahir' => 'Bandung, 31 juli 2004',
        'hobi' => 'main',
        'jk' => 'laki-laki',
        'agama' => 'islam',
        'alamat' => 'cipasir',
        'telp' => '08977712345',
        'email' => 'rizaakmalf01@gmail.com',


    ];
    return view('biodata',$YGY);
});

