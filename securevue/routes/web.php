<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;


Route::resource('admin/roles', RoleController::class);
Route::get('roles', [RoleController::class, 'index'])->name('roles.index');
Route::get('permissions', [RoleController::class, 'index'])->name('permissions.index');

// Home page
Route::get('/', function () {
    return view('login');
});

// 404 Page
Route::fallback(function () {
    return view('404');
});

// Roles
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
use App\Http\Controllers\UserController;

Route::resource('users', UserController::class);

// Vous pouvez également ajouter des routes spécifiques pour la gestion des rôles des utilisateurs si nécessaire
Route::get('users/{user}/edit-roles', [UserController::class, 'editRoles'])->name('users.editRoles');
Route::put('users/{user}/update-roles', [UserController::class, 'updateRoles'])->name('users.updateRoles');

Route::get('/edit-profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/edit-profile', [ProfileController::class, 'update'])->name('profile.update');



Route::get('/utilities/other', function () {
    return view('utilities-other');
});


Route::prefix('permissions')->group(function () {
    // Liste des permissions
    Route::get('/', [PermissionController::class, 'index'])->name('permissions.index');

    // Formulaire pour créer une nouvelle permission
    Route::get('create', [PermissionController::class, 'create'])->name('permissions.create');

    // Enregistrement d'une nouvelle permission
    Route::post('/', [PermissionController::class, 'store'])->name('permissions.store');

    // Formulaire pour modifier une permission existante
    Route::get('{permission}/edit', [PermissionController::class, 'edit'])->name('permissions.edit');

    // Mise à jour d'une permission existante
    Route::put('{permission}', [PermissionController::class, 'update'])->name('permissions.update');

    // Suppression d'une permission
    Route::delete('{permission}', [PermissionController::class, 'destroy'])->name('permissions.destroy');
});



// Dashboard (authenticated)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Authentication routes
require __DIR__.'/auth.php';

Route::get('/admin/dashboard', [UserController::class, 'index'])->name('admin.dashboard');
