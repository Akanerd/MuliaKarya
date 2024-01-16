<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

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

Route::get('/', function () {
    // Alert::success('Success Title', 'Success Message');

    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

//admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [Homecontroller::class, 'admindashboard'])->name('admin.dashboard');
    Route::resource('/admin/blog', BlogController::class, ['except' => ['show', 'edit', 'update']]);
});

//user routes
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/customer/dashboard', [Homecontroller::class, 'customerdashboard'])->name('customer.dashboard');
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
});


Route::get('/coba', function () {

    $date = Carbon::now()->format('M d, Y');

    return $date;
});


require __DIR__ . '/auth.php';
