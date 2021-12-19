<?php

use Illuminate\Support\Facades\Route;

//login
Route::get('/','App\Http\Controllers\Home@showLogin');
Route::post('/login','App\Http\Controllers\Home@verify');
Route::get('/create_acc','App\Http\Controllers\Home@createAcc');
Route::post('/create_acc','App\Http\Controllers\Home@created');
Route::get('/{id}/logout','App\Http\Controllers\Home@userLogout');

//Profile Management
Route::get('/{id}/myprofile','App\Http\Controllers\UserController@myprofile');
Route::post('/{id}/myprofile','App\Http\Controllers\UserController@updateProfile');

//products
Route::get("/{id}/viewproducts","App\Http\Controllers\ProductController@viewAllProducts");
Route::get("/{id}/viewNovels","App\Http\Controllers\ProductController@viewNovels");
Route::get("/{id}/viewComics","App\Http\Controllers\ProductController@viewComics");
Route::get("/{id}/viewKnowledge","App\Http\Controllers\ProductController@viewKnowledge");
Route::get("/{id}/viewothers","App\Http\Controllers\ProductController@viewOthers");
Route::get("/{id}/buy/{pid}","App\Http\Controllers\ProductController@buy");
Route::get("/{id}/pay/{pid}","App\Http\Controllers\ProductController@pay");
Route::get("/{id}/orderd/{pid}","App\Http\Controllers\ProductController@orderd");
Route::get("/{id}/viewmypro","App\Http\Controllers\ProductController@myPro");
Route::get("/{id}/addproduct","App\Http\Controllers\ProductController@addProForm");
Route::post("/{id}/addproduct","App\Http\Controllers\ProductController@addingPro");
Route::get("/{id}/delete/{pid}","App\Http\Controllers\ProductController@deleteProduct");
Route::get("/{id}/myorders","App\Http\Controllers\ProductController@myOrders");
Route::get("/{id}/mydelivery","App\Http\Controllers\ProductController@myDelivery");
Route::get("/{id}/delivered/{oid}","App\Http\Controllers\ProductController@orderCompleted");

