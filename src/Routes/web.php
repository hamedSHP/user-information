<?php

use Illuminate\Support\Facades\Route;

Route::get('users', 'Parax\User\Information\Controllers\UserController@index')->name('user.index');
