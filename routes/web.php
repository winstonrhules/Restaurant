<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get("/",[HomeController::class, "index"]);

Route::get("/redirect",[HomeController::class, "redirect"]);

Route::get("/users",[AdminController::class, "users"]);

Route::get("/deleteusers/{id}",[AdminController::class, "deleteusers"]);

Route::get("/foodmenu",[AdminController::class, "foodmenu"]);

Route::post("/addfood",[AdminController::class, "addfood"]);

Route::get("/deletefoodmenu/{id}",[AdminController::class, "deletefoodmenu"]);

Route::get("/updatefoodmenu/{id}",[AdminController::class, "updatefoodmenu"]);

Route::post("/updatedfoodmenu/{id}",[AdminController::class, "updatedfoodmenu"]);

Route::get("/adminreservation",[AdminController::class, "adminreservation"]);

Route::post("/reservation",[AdminController::class, "reservation"]);

Route::get("/adminchef",[AdminController::class, "adminchef"]);

Route::post("/addchef",[AdminController::class, "addchef"]);

Route::get("/deletechef/{id}",[AdminController::class, "deletechef"]);

Route::get("/updatechefview/{id}",[AdminController::class, "updatechefview"]);

Route::post("/updatechef/{id}",[AdminController::class, "updatechef"]);

Route::post("/addcart/{id}",[HomeController::class, "addcart"]);

Route::get("/showcart/{id}",[HomeController::class, "showcart"]);

Route::get("/remove/{id}",[HomeController::class, "remove"]);

Route::post("/confirmorder",[HomeController::class, "confirmorder"]);

Route::get("/order",[AdminController::class, "order"]);

Route::get("/search",[AdminController::class, "search"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
