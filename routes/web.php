<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
use Illuminate\support\Facades\Auth;

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
    return view('home2');
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


Route::get('/list', [BiodataController::class, 'index'])->name('list');
Route::get('/form_siswa', [BiodataController::class, 'create'])->name('form_siswa');
Route::post('/store_siswa', [BiodataController::class, 'store']);
Route::get('/edit/{id}', [BiodataController::class, 'edit'])->name('edit_siswa');
Route::put('/update/{id}', [BiodataController::class, 'update'])->name('update_siswa');
Route::delete('/delete/{id}', [BiodataController::class, 'destroy'])->name('destroy-siswa');
Route::get('/bio/{id}', [BiodataController::class, 'show'])->name('show-bio');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
