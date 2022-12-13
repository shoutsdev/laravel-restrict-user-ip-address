<?php

use Illuminate\Support\Facades\Route;

Route::middleware('blockIp')->get('/', function () {
    return view('welcome');
});
