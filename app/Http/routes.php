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
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]
    ],
    function()
    {
        /*
        |--------------------------------------------------------------------------
        | Роуты для обычных пользователей
        |--------------------------------------------------------------------------
        |
        */
        Route::group(['namespace' => 'Guest'], function() {
            Route::get('/', [
                'as' => 'home.index',
                'uses' => 'GuestController@index'
            ]);
        });

        /*
        |--------------------------------------------------------------------------
        | Роуты для авторизации
        |--------------------------------------------------------------------------
        |
        */

        // Authentication routes...
        Route::get('auth/login', 'Auth\AuthController@getLogin');
        Route::post('auth/login', 'Auth\AuthController@postLogin');
        Route::get('auth/logout', 'Auth\AuthController@getLogout');

        // Registration routes...
        Route::get('auth/register', 'Auth\AuthController@getRegister');
        Route::post('auth/register', 'Auth\AuthController@postRegister');

        // Password reset link request routes...
        Route::get('password/email', 'Auth\PasswordController@getEmail');
        Route::post('password/email', 'Auth\PasswordController@postEmail');

        // Password reset routes...
        Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
        Route::post('password/reset', 'Auth\PasswordController@postReset');

        /*
        |--------------------------------------------------------------------------
        | Роуты для администратора
        |--------------------------------------------------------------------------
        |
        */
        Route::group(['middleware' => 'auth', 'namespace' => 'Admin'], function() {

            /*Status panel*/
            Route::group(['_active_menu' => 'admin'], function(){
                Route::get('admin', [
                    'as' => 'admin.index',
                    'uses' => 'AdminController@index'
                ]);
            });

            /*Products*/
            Route::group(['_active_menu' => 'products'], function(){
                Route::resource("/admin/products", "ProductsController");
            });

        });

        /*
        |--------------------------------------------------------------------------
        | Роуты для зарегистрированных пользователей
        |--------------------------------------------------------------------------
        |
        */
        Route::group(['middleware' => 'user', 'namespace' => 'UserProfile'], function() {
            Route::get('profile', [
                'as' => 'profile.index',
                'uses' => 'UserProfileController@index'
            ]);
        });
    });