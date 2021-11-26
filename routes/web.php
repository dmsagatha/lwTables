<?php

use App\Http\Livewire\Admin\Screens;
use App\Http\Livewire\Admin\UserComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */

Route::group(["middleware" => ["auth:sanctum", "verified"]], function () {
  Route::view("/dashboard", "dashboard")->name("dashboard");
  Route::get("pantallas", Screens::class)->name("screens.index");
  Route::get('/usuarios', UserComponent::class);
});