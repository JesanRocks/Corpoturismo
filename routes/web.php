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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/','login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('usuarios',		'UsuarioController');
Route::resource('solicitud',	'SolicitudeController');
Route::resource('tramites',		'TramiteController');
Route::resource('revisados',	'RevisadoController');

Route::get('/Solicitud_de_vacaciones/{cod}',	'PDFController@pdf_vacaciones')->name('vacaciones');
Route::get('/Solicitud_de_vacaciones/descargar/{cod}',	'PDFController@pdf_descargar_vacaciones')->name('vacaciones.descarga');

Route::get('/Solicitud_de_permiso/{cod}',	'PDFController@pdf_permiso')->name('permiso');
Route::get('/Solicitud_de_permiso/descargar/{cod}',	'PDFController@pdf_descargar_permiso')->name('permiso.descarga');

Route::get('/Constancia_de_trabajo/{cod}',	'PDFController@pdf_constancia')->name('constancia');
Route::get('/Constancia_de_trabajo/descargar/{cod}',	'PDFController@pdf_descargar_constancia')->name('constancia.descarga');

#Route::get('inventarios/desargar/pdf',	'Inventario\pdfController@descarga')->name('descarga.pdf');