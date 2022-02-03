<?php

use Xcholars\Support\Proxies\Route;

use Xcholars\Support\Proxies\RouteGroup as Group;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

Route::get('/', 'HomeController@show');

Route::get('/home', 'HomeController@show');

Route::get('/services', 'HomeController@show');

Route::get('/contact-us', 'HomeController@show');

Route::get('/past-papers', 'PastPapersController@show');

Route::post('/past-papers', 'PastPapersController@show');

Route::get('/open-paper/{name}/{id}', 'PastPapersController@open');

Route::post('/search-paper', 'PastPapersController@search');

Route::get('/pdfs', 'PdfsController@show');

Route::post('/pdfs', 'PdfsController@show');

Route::post('/search-pdf', 'PdfsController@search');

Route::get('/open-pdf/{name}/{id}', 'PdfsController@open');

Route::get('/proposals', 'ProposalsController@show');

Route::get('/projects', 'ProjectsController@show');


Group::middleware('auth')->members(function ()
{
    //signup
    Route::view('/signup', 'auth/signup');

    Route::post('/signup', 'SignupController@create');

    //signin
    Route::view('/signin', 'auth/signin');

    Route::post('/signin', 'LoginController@authenticate');

    //forgotPassword
    Route::view('/forgotPassword', 'auth/forgotPassword');

    Route::post('/forgotPassword', 'forgotPasswordController@verify');

    //resetCode
    Route::view('/confirmResetCode', 'auth/confirmResetCode');

    Route::post('/confirmResetCode', 'ResetPasswordController@verifyResetCode');

    //resetPassword
    Route::view('/resetPassword', 'auth/resetPassword');

    Route::post('/resetPassword', 'ResetPasswordController@reset');
});

Group::middleware('guest')->members(function ()
{
    Route::post('/contact-us', 'ContactUsController@sendEmail');

    Route::view('/upload', 'services/upload');

    Route::post('/upload', 'UploadController@upload');

    // sign Out
    Route::get('/logout', 'LogoutController@logout');

    Route::post('/logout', 'LogoutController@logout');

});

Route::fallback(function (Response $response)
{
    return $response->withView('404');
});
