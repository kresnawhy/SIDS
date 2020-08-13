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

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/detail/{id}', 'WelcomeController@show')->name('detail');

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::get('/login', function () {
    return redirect('/');
})->name('login');

Route::group(['middleware' => 'admin', 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard.index');
    Route::resource('user', 'UserController');
    Route::resource('letter', 'LetterController');
});

Route::group(['middleware' => 'auth', 'namespace' => 'User'], function () {
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::get('/letter', 'LetterController@index')->name('letter');
    Route::post('/letter', 'LetterController@store')->name('letter.store');
    Route::get('/letter/{letter}', 'LetterController@show')->name('letter.print');
    Route::get('/location', 'LocationController@index')->name('location');
    Route::post('/location', 'LocationController@store')->name('location.store');
});
