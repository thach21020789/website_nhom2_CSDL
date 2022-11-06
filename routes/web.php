<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;

use \App\Http\Controllers\Admin\MainController;



Route::get('login', [LoginController::class, 'index'] );


//Route::get('login', function (){
//    return  view("admin.users.login",[
//        'title'=>'he thong'
//    ]);
//});
//


Route::post('myWebsite/login/store', [LoginController::class, 'store'] );



Route::get('main',[MainController::class, 'index'] )->name('admin');
