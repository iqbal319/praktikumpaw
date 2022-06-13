<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [MahasiswaController::class, "index"]);
Route::get("/create", [MahasiswaController::class, "create"]);
Route::post("/", [MahasiswaController::class, "store"]);
Route::get("/{nrp}/edit", [MahasiswaController::class, "edit"]);
Route::put("/", [MahasiswaController::class, "update"]);
Route::delete("/{nrp}", [MahasiswaController::class, "delete"]);
Route::view("/about", "about");

