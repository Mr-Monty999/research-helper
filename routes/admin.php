<?php

use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;


// Route::get("/test", [DashboardController::class, "index"]);



Route::group(["prefix" => "admin"], function () {
    Route::get("/", [DashboardController::class, "index"])->name("dashboard.index");

    Route::get("/profile", [AdminController::class, "profile"])->name("admins.profile.index");
    Route::put("/profile", [AdminController::class, "updateProfile"])->name("admins.profile.update");
    Route::resource("admins", AdminController::class);

    Route::get("/logout", [DashboardController::class, "logout"])->name("dashboard.logout");
});
