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
    return view('auth/welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
// multiAuth

	# <!-- espaceAdmin -->
Route::prefix('admin')->group(function() {
	Route::get('/', 'Admin\AdminController@index')->name('admin.dash');
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
	//Profs CRUD

	Route::get('/enseignant','Admin\EnseignantController@index');
	Route::get('/enseignant/create','Admin\EnseignantController@create');
	Route::post('/enseignant','Admin\EnseignantController@store');
	Route::get('/enseignant/{id}/details','Admin\EnseignantController@details');
	Route::get('/enseignant/{id}/edit','Admin\EnseignantController@edit');
	Route::put('/enseignant/{id}','Admin\EnseignantController@update');
	Route::delete('/enseignant/{id}','Admin\EnseignantController@destroy');

	//Etudiant CRUD

	Route::get('/etudiant','Admin\EtudiantController@index');
	Route::get('/etudiant/create','Admin\EtudiantController@create');
	Route::post('/etudiant','Admin\EtudiantController@store');
	Route::get('/etudiant/{id}/details','Admin\EtudiantController@details');
	Route::get('/etudiant/{id}/edit','Admin\EtudiantController@edit');
	Route::put('/etudiant/{id}','Admin\EtudiantController@update');
	Route::delete('/etudiant/{id}','Admin\EtudiantController@destroy');

	//Agent CRUD

	Route::get('/anonymat','Admin\AnonymatController@index');
	Route::get('/anonymat/create','Admin\AnonymatController@create');
	Route::post('/anonymat','Admin\AnonymatController@store');
	Route::get('/anonymat/{id}/details','Admin\AnonymatController@details');
	Route::get('/anonymat/{id}/edit','Admin\AnonymatController@edit');
	Route::put('/anonymat/{id}','Admin\AnonymatController@update');
	Route::delete('/anonymat/{id}','Admin\AnonymatController@destroy');

	//Groupe CRUD

	// Route::get('/groupe','GroupeController@index');
	// Route::get('/groupe/create','GroupeController@create');
	// Route::post('/groupe','GroupeController@store');
	// Route::get('/groupe/{id}/details','GroupeController@details');
	// Route::get('/groupe/{id}/edit','GroupeController@edit');
	// Route::put('/groupe/{id}','GroupeController@update');
	// Route::delete('/groupe/{id}','GroupeController@destroy');

});
	# <!-- end espaceAdmin -->

// <!-- espaceProf -->
Route::prefix('enseignant')->group(function() {
	Route::get('/', 'enseignant\EnseignantController@index')->name('enseignant.dash');
	Route::get('/login', 'Auth\EnseignantLoginController@showLoginForm')->name('enseignant.login');
	Route::post('/login', 'Auth\EnseignantLoginController@login')->name('enseignant.login.submit');
	Route::post('/logout', 'Auth\EnseignantLoginController@logout')->name('enseignant.logout');
});

Route::prefix('anonymat')->group(function() {
	Route::get('/', 'Anonymat\AnonymatController@index')->name('anonymat.dash');
	Route::get('/login', 'Auth\AnonymatLoginController@showLoginForm')->name('anonymat.login');
	Route::post('/login', 'Auth\AnonymatLoginController@login')->name('anonymat.login.submit');
	Route::post('/logout', 'Auth\AnonymatLoginController@logout')->name('anonymat.logout');
});

Route::prefix('etudiant')->group(function() {
	Route::get('/', 'Etudiant\EtudiantController@index')->name('etudiant.dash');
	Route::get('/login', 'Auth\EtudiantLoginController@showLoginForm')->name('etudiant.login');
	Route::post('/login', 'Auth\EtudiantLoginController@login')->name('etudiant.login.submit');
	Route::post('/logout', 'Auth\EtudiantLoginController@logout')->name('etudiant.logout');
});

// Route::get('import-export-csv-excel',array('as'=>'excel.import','uses'=>'FileController@importExportExcelORCSV'));
// Route::post('import-csv-excel',array('as'=>'import-csv-excel','uses'=>'FileController@importFileIntoDB'));
// Route::get('download-excel-file/{type}', array('as'=>'excel-file','uses'=>'FileController@downloadExcelFile'));

// Route::view('test','file_import_export');

//<!-- test -->
Route::get('ExportProfs','EnseignantController@ExportProfs');
//<!-- end test -->


Route::view('admin/show','admin.prof.show');
Route::view('param','admin.prof.param');
Route::view('password','admin.prof.password');
Route::view('competence','admin.prof.competence');
Route::view('groupes','prof.groupes.groupes');


Route::view('details','prof.groupes.details');






