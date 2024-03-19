<?php
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('auth.login');
});


//admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [Homecontroller::class, 'admindashboard'])->name('admin.dashboard');
    Route::resource('/admin/blog', BlogController::class, ['except' => ['show', 'edit', 'update']]);
    Route::resource('/admin/product', ProductController::class, ['except' => ['show']]);
});

//user routes
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/customer/dashboard', [ProductController::class, 'indexcustomer'])->name('customer.dashboard');
    Route::get('/customer/profile',[CustomerController::class, 'customerprofile'])->name('customer.profile');
    Route::post('/customer/profile/{id}', [CustomerController::class, 'updateorcreate'])->name('customer.updateorcreate');

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

require __DIR__ . '/auth.php';
