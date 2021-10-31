<?php

use Illuminate\Support\Facades\Route;
// import controllers
use App\Http\Controllers\Auth\RegisterController;

// for controllers, specify route then array which contains Controller namespace, followed by method. in this instance RegisterController's index method returns the view in auth.register

// name is chained on at end, this way in case the path changes the reference will remain the same without needing to change the code that is calling the route
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/posts', function () {
    return view('posts.index');
});
