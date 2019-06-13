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
Route::get('/test', function () {
    return view('test');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        $widget = App\Wallet::first();
        return view('index',compact('widget'));
    });
    Route::resource('MainWallet', 'WalletController');
    Route::resource('SubWallet', 'SubWalletController');
    Route::resource('Terms', 'TermsController');
    Route::get('wallet_statistic/{id}', 'SubWalletController@statistic');
    Route::get('wallet_terms/{id}', 'SubWalletController@terms');

    Route::resource('LoansLists', 'LoansController');
    Route::resource('LoansTypes', 'LoansTypesController');
    Route::get('LoansTypesByType/{id}', 'LoansController@lists');
    Route::resource('SubProducts', 'SubProductsController');



});


    Route::post('get-products-list', function (Request $request) {
    //auth::logout();
    $dat = \App\SubProducts::where('SubID','=',$request->SubID)
        ->join('loans_types','loans_types.id','=','sub_products.LoantypeID')
        ->pluck("loans_types.Name","loans_types.id");

    return response()->json($dat);
})->name('get-products-list');


Route::post('LoansListsdata', function (Request $request) {
    //auth::logout();
    $dat = \App\SubWallet::where('id','=',$request->walletid)->first();
    return response()->json($dat);
});

Route::get('logout', function () {
    auth::logout();
    return redirect('login');
});