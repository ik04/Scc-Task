<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


// http://localhost:8000/api/ (root route)
// test the Api on Postman
Route::get("/healthcheck",[UserController::class,"index"]);
// Register , login 
Route::post("/signup",[UserController::class,"register"]);
Route::post("/register-admin",[UserController::class,"registerAdmin"]); // to showcase the delete route, a simple admin login
Route::post("/login",[UserController::class,"login"]);

// Authenticated Routes (only for logged in users)
// list , Delete , Info 
Route::group(['middleware'=>['auth:sanctum']],function(){
Route::get("users",[UserController::class,"listUsers"]);
Route::get("users/{hours}",[UserController::class,"createdByHour"]);
Route::get("user/{id}",[UserController::class,"searchUser"]);
Route::post("logout",[UserController::class,"logout"]);
});
//todo remember to return proper errors