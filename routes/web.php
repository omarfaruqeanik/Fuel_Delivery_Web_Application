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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cart', function () {
    return view('front.cart');
});

Route::get('/orderplaceds', function () {
    return view('front.orderplaced');
});


Route::get('/unauthorized', function () {
    return view('404');
});

// Route::get('/fuelstation', 'FuelstationlistController@index');
Route::resource('/fuelstation', 'FuelstationlistController');
Route::post('fuelstation/update', 'AddstudentController@update')->name('fuelstation.update');

Route::get('fuelstation/destroy/{id}', 'AddstudentController@destroy');


// Order Place
Route::resource('/orderplace', 'FuelstationlistController');
Route::post('orderplace/update', 'AddstudentController@update')->name('orderplace.update');

Route::get('orderplace/destroy/{id}', 'AddstudentController@destroy');

///
Route::resource('managerequest', 'ManageorderController');

Route::post('managerequest/update', 'ManageorderController@update')->name('managerequest.update');

Route::get('managerequest/destroy/{id}', 'ManageorderController@destroy');
///

///
Route::resource('orders', 'OrderController');

Route::post('orders/update', 'OrderController@update')->name('orders.update');

Route::get('orders/destroy/{id}', 'OrderController@destroy');
///

///
Route::resource('Orderslist', 'CustomerorderController');

Route::post('Orderslist/update', 'CustomerorderController@update')->name('Orderslist.update');

Route::get('Orderslist/destroy/{id}', 'CustomerorderController@destroy');
///


////Add Customer
Route::resource('addcustomer', 'AddcustomerController');

Route::post('addcustomer/update', 'AddcustomerController@update')->name('addcustomer.update');

Route::get('addcustomer/destroy/{id}', 'AddcustomerController@destroy');
///

////Add Customer
Route::resource('addowner', 'AddownerController');

Route::post('addowner/update', 'AddownerController@update')->name('addowner.update');

Route::get('addowner/destroy/{id}', 'AddownerController@destroy');
///





////Update Password
Route::resource('updatepass', 'PasswordController');

Route::post('updatepass/update', 'PasswordController@update')->name('updatepass.update');

Route::get('updatepass/destroy/{id}', 'PasswordController@destroy');
///



///
Route::resource('addfuelstation', 'AddfuelstationController');

Route::post('addfuelstation/update', 'AddfuelstationController@update')->name('addfuelstation.update');

Route::get('addfuelstation/destroy/{id}', 'AddfuelstationController@destroy');
///



//Owner
Route::resource('/owner', 'OwnerController');

//Customer
Route::resource('/customer', 'CustomerController');


Route::get('/changePassword','HomeController@showChangePasswordForm');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');


Route::get('/admin', 'AdminController@index')->name('admin');

//Superadmin
Route::get('/superadmin', 'SuperAdminController@superadmin')->name('superadmin');


////Add Admin
Route::resource('adminlist', 'AddadminController');

Route::post('adminlist/update', 'AddadminController@update')->name('adminlist.update');

Route::get('adminlist/destroy/{id}', 'AddadminController@destroy');
///

