<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/mypage', function () {
    return view('home.mypage');
});


route::get('/',[HomeController::class,'home']);




route::get('/test',[HomeController::class,'index']);


route::post('/add_post',[HomeController::class,'add_post']);


route::get('/view_post',[HomeController::class,'view_post']);


route::get('/edit_post/{id}',[HomeController::class,'edit_post']);


route::post('/update_post/{id}',[HomeController::class,'update_post']);


route::get('/delete_post/{id}',[HomeController::class,'delete_post']);
