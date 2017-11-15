<?php

Route::get('/', 'UploadFileController@show');
Route::post('upload', 'UploadFileController@store');
