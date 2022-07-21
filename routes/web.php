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

Route::get('/', 'HomeController@welcome')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/detailPosting/{id?}', 'HomeController@detailPosting')->name('detailPosting');
Route::get('/detailProduk/{id?}', 'HomeController@detailProduk')->name('detailProduk');
Route::get('/listProduk', 'HomeController@listProduk')->name('produk');
Route::get('/listPosting', 'HomeController@listPosting')->name('posting');
Route::get('/listInformasi', 'HomeController@listInformasi')->name('Informasi');
Route::get('/formInformasi', 'InformasiController@formInformasi')->name('frmInformasi');
Route::get('/formPosting', 'PostingController@formPosting')->name('frmPosting');
Route::get('/formProduk', 'ProdukController@formProduk')->name('frmProduk');
Route::get('/showInformasi', 'InformasiController@showInformasi')->name('showInformasi');
Route::get('/showPosting', 'PostingController@showPosting')->name('showPosting');
Route::get('/showProduk', 'ProdukController@showProduk')->name('showProduk');
Route::post('/insertInformasi', 'InformasiController@prosesInput')->name('insertInformasi');
Route::post('/insertPosting', 'PostingController@prosesInput')->name('insertPosting');
Route::post('/insertBarang', 'ProdukController@prosesInput')->name('insertProduk');
Route::post('/updateInformasi', 'InformasiController@prosesUpdate')->name('updateInformasi');
Route::post('/updatePosting', 'PostingController@prosesUpdate')->name('updatePosting');
Route::post('/updateBarang', 'ProdukController@prosesUpdate')->name('updateProduk');
Route::get('/deleteInformasi/{id}', 'InformasiController@prosesDelete')->name('deleteInformasi');
Route::get('/deletePosting/{id}', 'PostingController@prosesDelete')->name('deletePosting');
Route::get('/deleteBarang/{id}', 'ProdukController@prosesDelete')->name('deleteProduk');
