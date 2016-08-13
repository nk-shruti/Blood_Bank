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

Route::get('admin/login', 'AdminController@login');

Route::post('login', 'AdminController@adminAuth');

Route::group(['middleware' => 'adminauth'], function () {
    
    Route::get('admin/home', function()
        {
            return view('admin.RequirementForm');
        });	

	Route::post('requirementForm','RequirementController@requiredBG');
	
	Route::get('reqForm','RequirementController@reqForm');

	Route::get('userView','signupController@registeredView');
	
	Route::get('logout','AdminController@logout');

});



Route::get('/', function () {
    return view('home');
});

Route::get('home', 'AdminController@homeView');
Route::get('signup','signupController@signupForm');
Route::post('signup','signupController@signup');

