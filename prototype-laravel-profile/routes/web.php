<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerServices; 

Route::get('/',[ControllerServices::class , 'home'])->name('home');