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


// route for crm operations and protected by middleware for only registered super admin user
Route::group(['middleware' => ['auth.basic','is-superadmin']], function()
{
     Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
     Route::resource('company', 'CompanyController');
     Route::get('searchajax',array('as'=>'searchajax','uses'=>'CompanyController@autoComplete'));

     //auto complete routes for service and company
     Route::get('searchcompany',array('as'=>'searchcompany','uses'=>'CompanyController@autoCompleteCompany'));
     Route::get('searchservice',array('as'=>'searchservice','uses'=>'ServiceController@autoCompleteService'));

     //Services route
     Route::resource('service', 'ServiceController')->middleware(['is-superadmin']); 
     //Subscription route
     Route::resource('subscription', 'SubscriptionController')->middleware(['is-superadmin']);  

        
});

// route for crm operations and protected by middleware for only registered  admin user of single company
Route::group(['middleware' => ['auth.basic','is-admin']], function()
{
     Route::get('/admindashboard', 'DashboardController@index')->name('dashboard');
     Route::resource('admincompany', 'AdminCompanyController');
     Route::get('adminsearchajax',array('as'=>'searchajax','uses'=>'CompanyController@autoComplete'));

        
});




