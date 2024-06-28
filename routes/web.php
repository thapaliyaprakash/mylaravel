<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/mypage', function () {
    return view('home.mypage');
});


Route::get('/', function () {
    return view('welcome');
});

route::get('/test',[HomeController::class,'index']);
