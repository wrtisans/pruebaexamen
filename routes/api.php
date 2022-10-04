<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/{lang}/{items?}', [\App\Http\Controllers\Api\V1\MainController::class, 'index']);
