<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'HomePage']);
