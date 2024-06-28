<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/mypage', function () {
    return view('home.mypage');
});


route::get('/',[HomeController::class,'home']);




route::get('/test',[HomeController::class,'index']);


route::post('/add_post',[HomeController::class,'add_post']);