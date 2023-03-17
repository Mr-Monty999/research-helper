<?php

use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;


// Route::get("/test", [DashboardController::class, "index"]);



Route::group(["prefix" => "admin"], function () {
    Route::get("/", [DashboardController::class, "index"])->name("dashboard.index");
});
