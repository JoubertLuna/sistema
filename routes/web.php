<?php

use Illuminate\Support\Facades\Route;

Route::get('admin/plans', 'Admin\Plancontroller@index')->name('plans.index');

Route::get('/', function () {
    return view('welcome');
});
