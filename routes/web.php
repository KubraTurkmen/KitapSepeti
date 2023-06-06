<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// write in root

Route::get('/hello', function() {
    return 'hello word!';
});


// call wiew in route

Route::get('/', function () {
    return view('welcome');
});


// call Controller Function

Route::get('/test/{isim}', [HomeController::class, 'test'] ) ->name('home'); 


Route::get('/hi', function(){
    return view('home.test');

});


Route::get('/',[HomeController::class, 'index']) ->name('home');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
