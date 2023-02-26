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

Route::get('/', function () {
    return redirect('/login');
});


// Route::get('/orders-main', function () {
//     return view('/home');
// });

Auth::routes(['register' => false]);
Route::group(['middleware' => ['auth']], function() {
    Route::get('/add-new', function () {
        return view('addnew')->with('filter', 'Add new order');
    });

    Route::get('/history', function () {
        return view('history')->with('filter', 'History');
    });

    
    Route::post('/submit-order', 'submit@main'); 
    Route::get('/orders-main', 'order_manage@main'); 
    Route::get('/orders-pending', 'order_manage@pending'); 
    Route::get('/orders-done', 'order_manage@done'); 
    Route::get('/orders-cancelled', 'order_manage@cancelled'); 

    Route::get('/remove/{order_id}', 'order_mod@remove');
    Route::get('/pending/{order_id}', 'order_mod@pending');
    Route::get('/done/{order_id}', 'order_mod@done');
    Route::get('/cancel/{order_id}', 'order_mod@cancel');

    Route::get('/clear-history', 'order_mod@clear_hist');





});
Route::get('/home', 'HomeController@index')->name('home');
