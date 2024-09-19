<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rutas protegidas por autenticación y verificación
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    
    // Ruta del dashboard para todos los usuarios autenticados
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Rutas protegidas por roles (solo accesibles para administradores)
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin', function () {
            return 'Admin Panel';
        })->name('admin.panel');
    });
});

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
