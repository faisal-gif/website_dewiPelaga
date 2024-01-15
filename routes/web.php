<?php

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

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@welcome')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/filterPosting', 'PostingController@filterPosting')->name('filterPosting');
Route::get('/detailPosting/{id?}', 'HomeController@detailPosting')->name('detailPosting');
Route::get('/detailProduk/{id?}', 'HomeController@detailProduk')->name('detailProduk');
Route::get('/listProduk/{idUser}', 'HomeController@listProduk')->name('produk');
Route::get('/listPosting', 'HomeController@listPosting')->name('posting');
Route::get('/listInformasi/{jenis}', 'HomeController@listInformasi')->name('Informasi');
Route::get('/formInformasi', 'InformasiController@formInformasi')->name('frmInformasi');
Route::get('/formPosting', 'PostingController@formPosting')->name('frmPosting');
Route::get('/showInformasi', 'InformasiController@showInformasi')->name('showInformasi');
Route::get('/showPosting', 'PostingController@showPosting')->name('showPosting');


Route::prefix('produk')->group(function () {
    Route::get('/', [ProdukController::class, 'produk'])->name('produk');
    Route::get('/index', [ProdukController::class, 'index'])->name('produk.index');
    Route::get('{id}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
    Route::post('/store', [ProdukController::class, 'store'])->name('produk.store');
    Route::put('{id}/update', [ProdukController::class, 'update'])->name('produk.update');
});


Route::post('/insertInformasi', 'InformasiController@prosesInput')->name('insertInformasi');
Route::post('/insertPosting', 'PostingController@prosesInput')->name('insertPosting');
Route::post('/updateInformasi', 'InformasiController@prosesUpdate')->name('updateInformasi');
Route::post('/updatePosting', 'PostingController@prosesUpdate')->name('updatePosting');
Route::get('/deleteInformasi/{id}', 'InformasiController@prosesDelete')->name('deleteInformasi');
Route::get('/deletePosting/{id}', 'PostingController@prosesDelete')->name('deletePosting');
Route::get('/deleteBarang/{id}', 'ProdukController@prosesDelete')->name('deleteProduk');
Route::post('/prosesFilter', 'PostingController@prosesPersetujuan')->name('prosesFilter');
