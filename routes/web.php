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

Route::prefix(LaravelLocalization::setLocale())->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('auth/{provider}', 'Auth\SocialController@redirectToProvider');
    Route::get('auth/{provider}/callback', 'Auth\SocialController@handleProviderCallback');

    Route::prefix('user')->group(function () {
        Route::get('/profile', 'UserAreaController@profile')->name('profile');

        Route::resource('urls', 'UrlController');
        Route::get('urls/{id}/delete', function (Request $request, $id) {
            return view('urls.delete', compact('id'));
        })->name('urls.delete');
    });

    Route::prefix('legal')->group(function () {
        Route::get('/legal-notice', 'LegalController@legal_notice')->name('legal-notice');
        Route::get('/disclaimer', 'LegalController@disclaimer')->name('disclaimer');
        Route::get('/privacy-policy', 'LegalController@privacy_policy')->name('privacy-policy');
    });

    Route::post('goto')->uses('RedirectorController@goto')->name('goto');

    Route::get('/{slug}')->uses('RedirectorController@index')->name('redirector');
});