<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['log.requests'])->get('/', function () {
    return response()->json(['message' => 'Hello, world!']);
});
