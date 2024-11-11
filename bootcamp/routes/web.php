<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    ray("Hola desde el archvio web.php");
    return view('welcome');
});
