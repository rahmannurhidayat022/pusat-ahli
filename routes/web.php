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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','RegistersController@index')->name('registers_index');
Route::post('store','RegistersController@store')->name('registers_store');
Route::get('home','LandingController@index')->name('landing');	

// Route::get('admin', 'Admin\DashboardController@index')
//             ->name('dashboard');


//     Route::prefix('admin/regist')->group(function(){
//         Route::get('/','Admin\RegistrasiController@index')->name('regist_index');
//         Route::get('create','Admin\RegistrasiController@create')->name('regist_create');
//         // Route::post('store','Admin\TicketController@store')->name('ticket.store');
//         Route::get('edit','Admin\RegistrasiController@edit')->name('regist_edit');
//         // Route::post('update/{id}','Admin\TicketController@update')->name('ticket.update');
//         // Route::delete('delete/{id}','Admin\TicketController@delete')->name('ticket.delete');
//         // Route::get('bin','Admin\TicketController@bin')->name('ticket.bin');
//         // Route::get('rollback/{id}','Admin\TicketController@rollback')->name('ticket.rollback');
//         // Route::delete('destroy/{id}','Admin\TicketController@destroy')->name('ticket.destroy');
//     });