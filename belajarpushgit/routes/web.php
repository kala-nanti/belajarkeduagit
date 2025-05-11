<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BelajarpushController;

Route::get('/', function () {
    return view('welcome');

});
    
Route::get('/biodata',[BelajarpushController::class,'index']);



