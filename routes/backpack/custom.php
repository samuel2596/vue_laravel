<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::get('prueba-vue', function(){
        return \Inertia\Inertia::render('prueba');
    });
    Route::get('Paises-vue', function(){
        return \Inertia\Inertia::render('Paises');
    });
    Route::get('crearpaises-vue', function(){
        return \Inertia\Inertia::render('crearpaises');
    });
    Route::get('Estados-vue', function(){
        return \Inertia\Inertia::render('Estados');
    });
    Route::get('Municipios-vue', function(){
        return \Inertia\Inertia::render('Municipios');
    });
    Route::get('ClienteGrupos-vue', function(){
        return \Inertia\Inertia::render('ClienteGrupos');
    });
    Route::get('Clientes-vue', function(){
        return \Inertia\Inertia::render('Clientes');
    });
    Route::get('ClienteDirecciones-vue', function(){
        return \Inertia\Inertia::render('ClienteDirecciones');
    });
}); // this should be the absolute last line of this file
