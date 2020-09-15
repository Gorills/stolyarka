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
    return view('index');
});
Route::get('/dizajn-proekty', function () {
    return view('dizajn-proekty');
});
Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/stroitelstvo', function () {
    return view('stroitelstvo');
});


// Деревянные дома

Route::get('/stroitelstvo/doma-iz-brusa', function () {
    return view('doma-iz-brusa');
});

Route::get('/stroitelstvo/doma-iz-brusa/doma-iz-profilirovannogo-brusa', function () {
    return view('doma-iz-profilirovannogo-brusa');
});

Route::get('/stroitelstvo/doma-iz-brusa/doma-iz-brusa-kamernoj-sushki', function () {
    return view('doma-iz-brusa-kamernoj-sushki');
});

Route::get('/stroitelstvo/doma-iz-brusa/doma-iz-kleenogo-brusa', function () {
    return view('doma-iz-kleenogo-brusa');
});

Route::get('/stroitelstvo/doma-iz-brusa/doma-iz-ocilindrovannogo-brevna', function () {
    return view('doma-iz-ocilindrovannogo-brevna');
});



// каркасные дома


Route::get('/stroitelstvo/karkasnye-doma', function () {
    return view('karkasnye-doma');
});


Route::get('/stroitelstvo/karkasnye-doma/fahverkovye-doma', function () {
    return view('fahverkovye-doma');
});

Route::get('/stroitelstvo/karkasnye-doma/barnhouse', function () {
    return view('barnhouse');
});


// бани

Route::get('/stroitelstvo/derevyannye-bani', function () {
    return view('derevyannye-bani');
});

Route::get('/stroitelstvo/derevyannye-bani/bani-iz-brusa', function () {
    return view('bani-iz-brusa');
});

Route::get('/stroitelstvo/derevyannye-bani/bani-ocilindrovannogo-brevna', function () {
    return view('bani-ocilindrovannogo-brevna');
});

Route::get('/stroitelstvo/derevyannye-bani/besedki', function () {
    return view('besedki');
});

// столярка

Route::get('/stolyarnaya-masterskaya', function () {
    return view('stolyarnaya-masterskaya');
});


Route::get('/stolyarnaya-masterskaya/derevyannye-lestnicy', function () {
    return view('derevyannye-lestnicy');
});

Route::get('/stolyarnaya-masterskaya/derevyannye-dveri', function () {
    return view('derevyannye-dveri');
});

Route::get('/stolyarnaya-masterskaya/derevyannye-stoly', function () {
    return view('derevyannye-stoly');
});

Route::get('/stolyarnaya-masterskaya/derevyannye-lavki', function () {
    return view('derevyannye-lavki');
});

Route::get('/stolyarnaya-masterskaya/derevyannye-kuhni', function () {
    return view('derevyannye-kuhni');
});

Route::get('/stolyarnaya-masterskaya/derevyannye-ehlementy-interera', function () {
    return view('derevyannye-ehlementy-interera');
});

Route::get('/sendemail', 'SendEmailController@index');

Route::post('/sendemail/send', 'SendEmailController@send');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
