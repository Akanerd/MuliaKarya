<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/index', function () {
    return view('Frontend.ecommerce.index');
})->name('index');

Route::get('/shop', function () {
    return view('Frontend.ecommerce.shop');
})->name('shop');

Route::get('/about', function () {
    return view('Frontend.ecommerce.about');
})->name('about');

Route::get('/custom', function () {
    return view('Frontend.ecommerce.custom');
})->name('custom');

Route::get('/blog', function () {
    return view('Frontend.ecommerce.blog');
})->name('blog');

Route::get('/v_admin', function () {
    return view('Backend.admin.index');
})->name('v_admin');

Route::get('/templates', function () {
    return view('Frontend.components.layouts');
});

Route::get('/loginecommmerce', function () {
    return view('Frontend.ecommerce.loginecommerce');
})->name('login');

Route::get('/register', function () {
    return view('Frontend.ecommerce.register');
});

Route::get('/resetpassword', function () {
    return view('Frontend.ecommerce.resetpassword');
});

Route::get('/profilepage', function () {
    return view('Frontend.ecommerce.profilepage');
});

Route::get('/resetlinkbefore', function () {
    return view('Frontend.ecommerce.resetlinkbefore');
});

Route::get('/resetlinkafter', function () {
    return view('Frontend.ecommerce.resetlink');
});

Route::get('/finishreset', function () {
    return view('Frontend.ecommerce.finishreset');
});