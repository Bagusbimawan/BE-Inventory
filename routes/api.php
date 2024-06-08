<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangExportController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/barang1",[BarangController::class,"IndexBarang"]);
Route::post("/barang1",[BarangController::class,"StoreBarang"]);
Route::post("/barang1/{id_barang}",[BarangController::class,"UpdateBarang"]);
Route::delete("/barang1/{id_barang}",[BarangController::class,"DestroyBarang"]);

Route::get("/barang2",[BarangExportController::class,"IndexBarang"]);
Route::post("/barang2",[BarangExportController::class,"StoreBarang"]);

Route::get("/login",[LoginController::class,"IndexLogin"]);
Route::post("/login",[LoginController::class,"StoreLogin"]);
