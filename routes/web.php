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

// Route::get('import-export-csv-excel',array('as'=>'excel.import','uses'=>'FileController@importExportExcelORCSV'));
// Route::post('import-csv-excel',array('as'=>'import-csv-excel','uses'=>'FileController@importFileIntoDB'));
// Route::get('download-excel-file/{type}', array('as'=>'excel-file','uses'=>'FileController@downloadExcelFile'));

// Route::view('test','file_import_export');

//<!-- test -->
Route::get('ExportProfs','EnseignantController@ExportProfs');
//<!-- end test -->

Route::view('admin','layouts.admin');
Route::view('index','admin.prof.indexx');
Route::view('admin/etudiant/index','admin.etudiant.index');




Route::get('/', function () {
    return view('welcome');
});
//
Route::view('test','admin.prof.index');

Route::get('Enseignants','EnseignantController@index');
Route::get('Enseignants/create','EnseignantController@create');
Route::post('Enseignants','EnseignantController@store');
Route::get('Enseignants/{id}/details','EnseignantController@details');
Route::get('Enseignants/{id}/edit','EnseignantController@edit');
Route::put('Enseignants/{id}','EnseignantController@update');
Route::delete('Enseignants/{id}','EnseignantController@destroy');