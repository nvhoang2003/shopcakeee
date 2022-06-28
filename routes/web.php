<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(['prefix' => 'Admin'], function () {
    Route::get('', [
        'uses' => 'AdminController@index',
        'as' => 'admin.index'
    ]);
    Route::get('update/{username}', [
        'uses' => 'AdminController@edit',
        'as' => 'Admin.edit'
    ]);

    Route::post('update/{username}', [
        'uses' => 'AdminController@update',
        'as' => 'Admin.update'
    ]);
});

Route::group(['prefix' => 'Cus'], function () {
    Route::get('', [
        'uses' => 'CusController@index',
        'as' => 'Cus.index'
    ]);
    Route::get('update/{cusid}', [
        'uses' => 'CusController@edit',
        'as' => 'Cus.edit'
    ]);

    Route::post('update/{cusid}', [
        'uses' => 'CusController@update',
        'as' => 'Cus.update'
    ]);
});

Route::group(['prefix' => 'Event'], function () {
    Route::get('', [
        'uses' => 'CategoryController@index',
        'as' => 'Event.index'
    ]);

    Route::get('create', [
        'uses' => 'CategoryController@create',
        'as' => 'Event.create'
    ]);

    Route::post('create', [
        'uses' => 'CategoryController@store',
        'as' => 'Event.store'
    ]);

    Route::get('update/{eventid}', [
        'uses' => 'CategoryController@edit',
        'as' => 'Event.edit'
    ]);

    Route::post('update/{eventid}', [
        'uses' => 'CategoryController@update',
        'as' => 'Event.update'
    ]);

    Route::get('delete/{eventid}', [
        'uses' => 'CategoryController@confirm',
        'as' => 'Event.confirm'
    ]);
    Route::post('delete/{eventid}', [
        'uses' => 'CategoryController@destroy',
        'as' => 'Event.destroy'
    ]);
});

Route::group(['prefix' => 'Cake'], function () {
    Route::get('', [
        'uses' => 'CakeController@index',
        'as' => 'Cake.index'
    ]);

    Route::get('show/{cakeid}',[
        'uses' => 'CakeController@show',
        'as' => 'Cake.show'
    ]);

    Route::get('create', [
        'uses' => 'CakeController@create',
        'as' => 'Cake.create'
    ]);

    Route::post('create', [
        'uses' => 'CakeController@store',
        'as' => 'Cake.store'
    ]);

    Route::get('update/{cakeid}', [
        'uses' => 'CakeController@edit',
        'as' => 'Cake.edit'
    ]);

    Route::post('update/{cakeid}', [
        'uses' => 'CakeController@update',
        'as' => 'Cake.update'
    ]);

    Route::get('delete/{cakeid}', [
        'uses' => 'CakeController@confirm',
        'as' => 'Cake.confirm'
    ]);
    Route::post('delete/{cakeid}', [
        'uses' => 'CakeController@destroy',
        'as' => 'Cake.destroy'
    ]);

});

Route::group(['prefix' => '/'], function (){
    Route::get('login',[
        'uses' => 'SignController@login',
        'as' => 'auth.ask'
    ]);

    Route::post('login',[
        'uses' => 'SignController@signin',
        'as' => 'auth.signin'
    ]);

    Route::get('logout',[
        'uses' => 'SignController@signout',
        'as' => 'auth.signout'
    ]);
    Route::get('home',[
        'uses' => 'NormalController@home',
        'as' => 'auth.home'
    ]);
});

