<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

Route::redirect('/', '/login', 301);

Route::middleware('auth')->group(function () {
    Route::prefix('app')->group(function () {
        Route::prefix('admin')->group(function () {
            Route::prefix('user')->group(function () {
                Route::get('/list', [UserController::class, 'index'])->name('admin.user.list');
            });
        });
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/*$routes = [
    'login' => [
        'prefix' => 'login',
        'controller' => LoginController::class,
        'routes' => [
            ['get', '/', 'index'],
            ['post', '/process', 'process'],
        ],
    ]
];

foreach ($routes as $module => $data) {
    Route::prefix($data['prefix'])->name($module . '.')->group(function () use ($data) {
        foreach ($data['routes'] as $route) {
            Route::{ $route[0] }($route[1], [$data['controller'], $route[2]])->name($route[2]);
        }
    });
}*/