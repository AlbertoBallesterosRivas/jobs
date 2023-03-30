<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;

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

// All jobs
Route::get('/', [JobController::class, "index"]);

// Show Create Form
Route::get("/jobs/create", [JobController::class, "create"])->middleware("auth");

// Store Job Data
Route::post("/jobs", [JobController::class, "store"])->middleware("auth");

// Show Edit Form
Route::get("/jobs/{job}/edit", [JobController::class, "edit"])->middleware("auth");

// Update Job
Route::put("/jobs/{job}", [JobController::class, "update"])->middleware("auth");

// Delete Job
Route::delete("/jobs/{job}", [JobController::class, "destroy"])->middleware("auth");

// Manage Jobs
Route::get("/jobs/manage", [JobController::class, "manage"])->middleware("auth");

// Single job, make sure this one is at the bottom so it doesn't think that /jobs/create is a {job}
Route::get("/jobs/{job}", [JobController::class, "show"]);

// Show Register/Create Form
Route::get("/register", [UserController::class, "create"])->middleware(("guest"));

// Create New User
Route::post("/users", [UserController::class, "store"]);

// Log User Out
Route::post("/logout", [UserController::class, "logout"])->middleware("auth");

// Show Login Form
Route::get("/login", [UserController::class, "login"])->name("login")->middleware(("guest"));

// Log In User
Route::post("/users/authenticate", [UserController::class, "authenticate"]);

//Common resource routes:
// index - Show all jobs
// show - Show single job
// create - Show form to create new job
// store - Store new job
// edit - Show form to edit job
// update - Update job
// destroy - Delete job
