<?php

Route::group(['namespace' => 'Xdmin'], function() {

    Route::get('/', 'HomeController@index')->name('xdmin.dashboard');

    Route::name('xdmin.')->group(function(){
        Route::resource('/posts','PostController');
    });

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('xdmin.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('xdmin.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('xdmin.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('xdmin.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('xdmin.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('xdmin.password.reset');

    // Verify
    // Route::get('email/resend', 'Auth\VerificationController@resend')->name('xdmin.verification.resend');
    // Route::get('email/verify', 'Auth\VerificationController@show')->name('xdmin.verification.notice');
    // Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('xdmin.verification.verify');

});