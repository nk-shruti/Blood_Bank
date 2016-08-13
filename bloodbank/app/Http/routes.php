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
            return view('admin.home');
        });	

	Route::post('uploadEvents','EventsController@uploadEvents');
	Route::get('eventsForm','EventsController@eventsForm');

	Route::get('uploadProjects','ProjectsController@uploadProjects');
	Route::get('projectsForm','ProjectsController@projectsForm');

	Route::get('viewRegistrations','ogcController@registeredView');
	Route::get('userView','ogcController@userView');
	
	Route::get('logout','AdminController@logout');

});



Route::get('/', function () {
    return view('home');
});

Route::get('home', 'AdminController@homeView');
Route::get('aboutUs','AdminController@aboutUs');
Route::get('projects', 'ProjectsController@projectsView');
Route::get('events','EventsController@eventsView');
Route::get('event','EventsController@event');
Route::get('ogc','signupController@signupForm');
Route::post('signup','signupController@signup');

