<?php

use App\Http\Controllers\BandController;
use App\Http\Controllers\HelloWorldController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('hello-post/{name}', [HelloWorldController::class, 'hello']);

Route::get('hello-post/{name}', [HelloWorldController::class, 'hello']);

// http://127.0.0.1:8000/api/hello-post/dio?foo=bar&foo1=bar1&foo2=bar2

Route::get('bands', [BandController::class, 'getAll']);

Route::get('bands/{id}', [BandController::class, 'getById']);

Route::get('bands/gender/{id}', [BandController::class, 'getBandsByGender']);

Route::post('bands/store', [BandController::class, 'store']);
