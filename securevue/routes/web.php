<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;

Route::resource('admin/roles', RoleController::class);
// Home page
Route::get('/', function () {
    return view('login');
});


// 404 Page
Route::fallback(function () {
    return view('404');
});

// Blank page
Route::get('/blank', function () {
    return view('blank');
});

// Buttons page
Route::get('/buttons', function () {
    return view('buttons');
});

// Cards page
Route::get('/cards', function () {
    return view('cards');
});

// Charts page
Route::get('/charts', function () {
    return view('charts');
});

// Forgot Password page
Route::get('/forgot-password', function () {
    return view('forgot-password');
});

// Login page
Route::get('/login', function () {
    return view('login');
});

// Register page
Route::get('/register', function () {
    return view('register');
});

// Tables page
Route::get('/tables', function () {
    return view('tables');
});

// Utilities - Animation page
Route::get('/utilities/animation', function () {
    return view('utilities-animation');
});

// Utilities - Border page
Route::get('/utilities/border', function () {
    return view('utilities-border');
});

// Utilities - Color page
Route::get('/utilities/color', function () {
    return view('utilities-color');
});

// Utilities - Other page
Route::get('/utilities/other', function () {
    return view('utilities-other');
});

//


// Dashboard (authenticated)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Authentication routes
require __DIR__.'/auth.php';
