<?php

use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\LevelController;
use App\Http\Controllers\Dashboard\SectionController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Route::get("/test", [DashboardController::class, "index"]);



Route::group(["prefix" => "admin"], function () {
    Route::get("/login", [DashboardController::class, "login"])->name("dashboard.login")->middleware("guest");
    Route::post("/login/attempt", [DashboardController::class, "attemptLogin"])->name("dashboard.login.attempt")->middleware("guest");

    Route::group(["middleware" => "auth:admin"], function () {
        Route::get("/", [DashboardController::class, "index"])->name("dashboard.index");

        //** Admins  */
        Route::get("/profile", [AdminController::class, "profile"])->name("admins.profile.index");
        Route::put("/profile", [AdminController::class, "updateProfile"])->name("admins.profile.update");
        Route::resource("admins", AdminController::class);

        Route::get("/logout", [DashboardController::class, "logout"])->name("dashboard.logout");

        /* Levels */
        Route::resource("levels", LevelController::class);



        /* Sections */
        Route::resource("sections", SectionController::class);
    });
});
