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


Route::get('testapi', [
        'as' => 'testapi', 'uses' => 'TestController@index'
    ]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// route for crm operations and protected by middleware for only registered user
Route::group(['middleware' => 'auth.basic'], function()
{
	 Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
     Route::resource('company', 'CompanyController'); 
     Route::get('searchajax',array('as'=>'searchajax','uses'=>'CompanyController@autoComplete'));
        
});
