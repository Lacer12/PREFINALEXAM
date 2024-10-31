<?php

use App\Models\informations;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = informations::all ();
    $data = $data [0];
    return view('welcome', ['data' => $data]);

   
});
