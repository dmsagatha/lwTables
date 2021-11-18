<?php

use App\Http\Controllers\Admin\ScreenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(["middleware" => ["auth:sanctum", "verified"]], function () {
    Route::view("/dashboard", "dashboard")->name("dashboard");
    Route::resource("pantallas", ScreenController::class)->only("index", "edit");
});