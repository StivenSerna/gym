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


Route::get('/', 'DashboardController@index')->name('inicio');

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

Route::post('anthropometricrecord/{member_id}/destroy', [
    'as' => 'anthropometricrecord.destroy',
    'uses' => 'AnthropometricsRecordsController@destroy'
]);

Route::post('anthropometricrecord', [
    'as' => 'anthropometricrecord.store',
    'uses' => 'AnthropometricsRecordsController@store'
]);


Route::resource('membership', 'MembershipsController');
Route::get('membership/{id}/destroy', [
        'uses' => 'MembershipsController@destroy',
        'as' => 'membership.destroy']);

Route::resource('affiliation', 'AffiliationsController', ['only' => [
    'index', 'store'
]]);

Route::get('affiliation/{member_id}/create', [
    'as' => 'affiliation.create',
    'uses' => 'AffiliationsController@create'
]);

Route::put('affiliation/{member_id}/update', [
    'as' => 'affiliation.update',
    'uses' => 'AffiliationsController@update'
]);


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
