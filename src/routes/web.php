<?php

Route::group(['namespace' => 'Raj\User\Http\Controllers'], function(){
    Route::get('user', "UserController@create");
    Route::post('user/add',"UserController@add")->name("user.add");
});
