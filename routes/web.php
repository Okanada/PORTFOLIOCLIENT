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

Route::get('/', 'PageController@index')->name('main');
Route::post('/contact', 'PageController@contact')->name('sendMail');


Route::get('/galerie', 'PageController@galeria')->name('Galeria');
Route::get('/galerie/{post}', 'PageController@galeriashow')->name('GaleriaShow');



Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/post', 'PostController')->middleware('Salut');

