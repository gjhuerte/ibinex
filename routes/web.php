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

Route::get('/', 'HomeController@index');

Route::get('contact-us', 'HomeController@getContactUsPage');

Route::get('about', 'HomeController@getAboutPage');

Route::get('pricing', 'HomeController@getPricingPage');

Route::get('register', 'AccountsController@getRegistrationForm');

Route::get('security', 'HomeController@getSecurityPage');

Route::get('services', 'HomeController@getServicesPage');

Route::get('why-ibinex', 'HomeController@getWhyIbinexPage');
