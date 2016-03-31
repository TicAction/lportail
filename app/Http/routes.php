<?php








Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::resource('ecole','SchoolController');
    Route::get('/', function () {
        return view('welcome');
    });
    Route::resource('cs','SchoolboardController');
    Route::get('/home', 'HomeController@index');
});
