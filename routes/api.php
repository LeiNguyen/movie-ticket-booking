<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/test-api', function () {
    return response()->json(['message' => 'API hoạt động!']);
});
