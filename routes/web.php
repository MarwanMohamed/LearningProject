<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('sendemail', 'EmailController@sendEmail');
