<?php
/**
 * Route front
 */
if(sc_config('AmadoMaster')) {
Route::group(
    [
        'prefix'    => 'plugin/amado_master',
        'namespace' => 'App\Plugins\Other\AmadoMaster\Controllers',
    ],
    function () {
        Route::get('paypal', 'FrontController@index')
        ->name('amado_master.index');
    }
);
}
/**
 * Route admin
 */
Route::group(
    [
        'prefix' => SC_ADMIN_PREFIX.'/amado_master',
        'middleware' => SC_ADMIN_MIDDLEWARE,
        'namespace' => 'App\Plugins\Other\AmadoMaster\Admin',
    ], 
    function () {
        Route::get('/', 'AdminController@index')
        ->name('admin_amado_master.index');
    }
);
