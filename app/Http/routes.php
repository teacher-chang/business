<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::any('login','LoginController@login');
Route::any('login_check','LoginController@login_check');
Route::any('index','AdminController@index');
Route::any('order_list','AdminController@order_list');
Route::any('order_add','AdminController@order_add');
Route::any('order_save','AdminController@order_save');
Route::any('order_update/{id}','AdminController@order_update');
Route::any('order_edit','AdminController@order_edit');
Route::any('order_delete/{id}','AdminController@order_delete');
Route::any('end_list','AdminController@end_list');
Route::any('order_finish/{id}','AdminController@order_finish');
Route::any('order_search','AdminController@order_search');




Route::any('provider_list','ProviderController@provider_list');
Route::any('provider_add','ProviderController@provider_add');
Route::any('provider_save','ProviderController@provider_save');
Route::any('provider_update/{id}','ProviderController@provider_update');
Route::any('provider_edit','ProviderController@provider_edit');
Route::any('provider_del/{id}','ProviderController@provider_del');

Route::any('user_list','UserController@user_list');
Route::any('user_add','UserController@user_add');
Route::any('user_save','UserController@user_save');
Route::any('user_update/{id}','UserController@user_update');
Route::any('user_edit','UserController@user_edit');
Route::any('user_del/{id}','UserController@user_del');







