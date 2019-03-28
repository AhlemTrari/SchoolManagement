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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// multiAuth
Route::get('/admin', 'AdminController@index');

// Route::get('admin-login', 'Auth\AdminLoginController@showLoginForm');
// Route::post('admin-login', ['as'=>'admin-login','uses'=>'Auth\AdminLoginController@login']);


// Route::get('import-export-csv-excel',array('as'=>'excel.import','uses'=>'FileController@importExportExcelORCSV'));
// Route::post('import-csv-excel',array('as'=>'import-csv-excel','uses'=>'FileController@importFileIntoDB'));
// Route::get('download-excel-file/{type}', array('as'=>'excel-file','uses'=>'FileController@downloadExcelFile'));

// Route::view('test','file_import_export');

//<!-- test -->
Route::get('ExportProfs','EnseignantController@ExportProfs');
//<!-- end test -->


// <!-- espaceAdmin -->


//Profs CRUD

Route::get('admin/enseignant','EnseignantController@index');
Route::get('admin/enseignant/create','EnseignantController@create');
Route::post('admin/enseignant','EnseignantController@store');
Route::get('admin/enseignant/{id}/details','EnseignantController@details');
Route::get('admin/enseignant/{id}/edit','EnseignantController@edit');
Route::put('admin/enseignant/{id}','EnseignantController@update');
Route::delete('admin/enseignant/{id}','EnseignantController@destroy');

//Etudiant CRUD


Route::get('admin/etudiant','EtudiantController@index');
Route::get('admin/etudiant/create','EtudiantController@create');
Route::post('admin/etudiant','EtudiantController@store');
Route::get('admin/etudiant/{id}/details','EtudiantController@details');
Route::get('admin/etudiant/{id}/edit','EtudiantController@edit');
Route::put('admin/etudiant/{id}','EtudiantController@update');
Route::delete('admin/etudiant/{id}','EtudiantController@destroy');

//Agent CRUD

Route::get('admin/anonymat','AnonymatController@index');
Route::get('admin/anonymat/create','AnonymatController@create');
Route::post('admin/anonymat','AnonymatController@store');
Route::get('admin/anonymat/{id}/details','AnonymatController@details');
Route::get('admin/anonymat/{id}/edit','AnonymatController@edit');
Route::put('admin/anonymat/{id}','AnonymatController@update');
Route::delete('admin/anonymat/{id}','AnonymatController@destroy');

//Groupe CRUD

Route::get('admin/groupe','GroupeController@index');
Route::get('admin/groupe/create','GroupeController@create');
Route::post('admin/groupe','GroupeController@store');
Route::get('admin/groupe/{id}/details','GroupeController@details');
Route::get('admin/groupe/{id}/edit','GroupeController@edit');
Route::put('admin/groupe/{id}','GroupeController@update');
Route::delete('admin/groupe/{id}','GroupeController@destroy');

// <!-- end espaceAdmin -->
// <!-- espaceProf -->

Route::view('prof','prof.accueil');
