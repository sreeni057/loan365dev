<?php
Route::group(['middleware' => 'web'], function ()
{
	/*Route::any('onboarding/{key}/{value}','Citw\Loan365\Http\Controllers\guest@purchase');
	Route::any('onboarding/{key}/{value}','Citw\Loan365\Http\Controllers\guest@purchase');*/
	Route::any('onboarding/{key}/{value}','Citw\Loan365\Http\Controllers\guest@purchase');
	Route::any('onboarding/{key}','Citw\Loan365\Http\Controllers\guest@purchase');
	Route::any('login','Citw\Loan365\Http\Controllers\Auth\LoginController@getLoginForm');
	Route::any('register','Citw\Loan365\Http\Controllers\Auth\RegisterController@getRegisterForm');
	Route::any('saveregister','Citw\Loan365\Http\Controllers\Auth\RegisterController@saveRegisterForm');
	Route::any('authenticate','Citw\Loan365\Http\Controllers\Auth\LoginController@authenticate');
	Route::any('dashboard','Citw\Loan365\Http\Controllers\dashboardController@dashboard');
	Route::any('logout','Citw\Loan365\Http\Controllers\Auth\LoginController@getLogout');
	Route::get('forgot', 'Citw\Loan365\Http\Controllers\Auth\ForgotPasswordController@index');
	Route::post('forgot_link', 'Citw\Loan365\Http\Controllers\Auth\ForgotPasswordController@postForgot');
	Route::any('reset/user/{token}', 'Citw\Loan365\Http\Controllers\Auth\ForgotPasswordController@getReset');	
	Route::any('contact', 'Citw\Loan365\Http\Controllers\guest@contact');	
});