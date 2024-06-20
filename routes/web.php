<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IpLookupController;

Route::post('/api/lookup', [IpLookupController::class, 'lookup']);

Route::get('/', function () {
    return view('welcome');
});
