<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::redirect('/', '/login', 301);

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