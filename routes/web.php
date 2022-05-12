<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
 
Route::get('/', function () {
    return redirect('user');
});

Route::resource("/user", UserController::class);