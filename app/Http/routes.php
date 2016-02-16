<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|Rutas de ficha antropometrica
*/


Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::group(['prefix' => 'admin'], function(){
	Route::resource('member', 'MembersController');
	Route::get('member/{id}/destroy', [
		'uses' => 'MembersController@destroy',
		'as' => 'admin.member.destroy']);
            Route::post('member/search', [
                       'uses' => 'MembersController@search',
                       'as' => 'admin.member.search']);

});


Route::get('medicalrecord/{member_id}/create', [
    'as' => 'medicalrecord.create',
    'uses' => 'MedicalRecordsController@create'
]);

Route::put('medicalrecord/{member_id}/update', [
    'as' => 'medicalrecord.update',
    'uses' => 'MedicalRecordsController@update'
]);

Route::post('medicalrecord', [
    'as' => 'medicalrecord.store',
    'uses' => 'MedicalRecordsController@store'
]);


Route::get('anthropometricrecord/{member_id}/create', [
    'as' => 'anthropometricrecord.create',
    'uses' => 'AnthropometricsRecordsController@create'
]);

Route::post('anthropometricrecord', [
    'as' => 'anthropometricrecord.store',
    'uses' => 'AnthropometricsRecordsController@store'
]);


Route::resource('membership', 'MembershipsController');
Route::get('membership/{id}/destroy', [
        'uses' => 'MembershipsController@destroy',
        'as' => 'membership.destroy']);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
