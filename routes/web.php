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
use Illuminate\Http\Request;



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
    Route::resource('SubProducts', 'SubProductsController');



});

Route::post('LoansListsdata', function (Request $request) {
    //auth::logout();
    $dat = \App\SubWallet::where('id','=',$request->walletid)->first();
    return response()->json($dat);
});

Route::get('logout', function () {
    auth::logout();
    return redirect('login');
});