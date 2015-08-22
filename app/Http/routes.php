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
Route::get('/', 'MainController@index');
Route::get('artists', 'MainController@artists');
Route::get('tattoos', 'MainController@tattoos');
Route::get('studios', 'MainController@studios');
Route::get('care', 'MainController@care');
Route::get('tattoo-cultr', 'MainController@tattooCultr');

Route::group(['middleware' => ['auth', 'checkProfileCompletion']], function () {
    Route::get('profile', 'MainController@profile');
    Route::get('profile/tattoos', 'ProfileController@tattoos');
    Route::get('profile/studios', 'ProfileController@studios');
    Route::get('profile/followers', 'ProfileController@followers');
    Route::get('profile/following', 'ProfileController@following');
    Route::get('profile/edit', 'ProfileController@edit');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('complete-profile', 'ProfileController@completeProfile');
    Route::get('complete-profile-member', 'ProfileController@completeProfileMember');
    Route::get('complete-profile-artist', 'ProfileController@completeProfileArtist');
    Route::get('complete-profile-studio', 'ProfileController@completeProfileStudio');

    Route::post('complete-profile-member', 'ProfileController@completeProfileMemberSave');
    Route::post('complete-profile-artist', 'ProfileController@completeProfileArtistSave');
    Route::post('complete-profile-studio', 'ProfileController@completeProfileStudioSave');
});

// Authentication routes...
Route::get('user/login', 'Auth\AuthController@getLogin');
Route::post('user/login', 'Auth\AuthController@postLogin');
Route::get('user/login/facebook', 'Auth\AuthController@redirectToFacebook');
Route::get('user/facebook/callback', 'Auth\AuthController@handleFacebookCallback');
Route::get('user/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('user/register', 'Auth\AuthController@getRegister');
Route::post('user/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');