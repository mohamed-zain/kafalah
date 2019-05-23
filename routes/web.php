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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('index');
    });
    Route::resource('MainWallet', 'WalletController');
    Route::resource('SubWallet', 'SubWalletController');
    Route::get('wallet_statistic/{id}', 'SubWalletController@statistic');

    Route::resource('LoansLists', 'LoansController');
Route::resource('LoansTypes', 'LoansTypesController');
});


Route::get('logout', function () {
    auth::logout();
    return redirect('login');
});