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
Route::post('studios', 'MainController@studiosSearch');
Route::get('care', 'MainController@care');
Route::get('tattoo-cultr', 'MainController@tattooCultr');

Route::get('artist/{id}', 'MainController@show');
Route::get('artist/{id}/studio', 'MainController@artistStudio');
Route::get('studio/{id}', 'MainController@studio');

Route::get('member/{id}', 'MemberController@show');


Route::get('care', function () {
    return view('pages.care');
});
Route::get('terms', function () {
    return view('pages.terms');
});
Route::get('contact', function () {
    return view('pages.contact');
});

Route::group(['middleware' => ['auth', 'checkProfileCompletion']], function () {
    Route::get('profile', 'MainController@profile');
    Route::get('artist/update/location', 'ProfileController@tattoos');
    Route::get('profile/tattoos/add', 'ProfileController@tattoosAdd');
    Route::get('profile/studios', 'ProfileController@studios');
    Route::get('profile/followers', 'ProfileController@followers');
    Route::get('profile/following', 'ProfileController@following');
    Route::get('profile/edit', 'ProfileController@edit');
    Route::post('profile/changeImg', 'ProfileController@changeImg');

    Route::post('tattoo/upload', 'TattooController@uploadTattoo'); //upload tattoo to artist profile
    Route::get('tattoo/approve/{id}', 'TattooController@approveTattoo');
    Route::get('tattoo/reject/{id}', 'TattooController@rejectTattoo');

    Route::get('follow/{id}', 'MainController@Follow');
    Route::get('unfollow/{id}', 'MainController@Unfollow');

    Route::post('artist/update/location', 'ArtistController@updateLocation');
    Route::post('artist/update/cover', 'ArtistController@updateCover');
    Route::post('artist/update/bio', 'ArtistController@updateBio');

});

Route::group(['middleware' => 'auth'], function () {
    Route::get('complete-profile', 'ProfileController@completeProfile');
    Route::post('complete-profile', 'ProfileController@completeProfileSave');
});

// Authentication routes...
Route::get('user/login', 'Auth\AuthController@getLogin');
Route::post('user/login', 'Auth\AuthController@postLogin');
Route::get('user/login/facebook', 'Auth\AuthController@redirectToFacebook');
Route::get('user/facebook/callback', 'Auth\AuthController@handleFacebookCallback');
Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('user/register', 'Auth\AuthController@getRegister');
Route::post('user/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');