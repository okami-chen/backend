<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group([
    'prefix'     => config('admin.route.prefix'),
//    'namespace'  => 'Modules\Order',
    'middleware' => config('admin.route.middleware'),
], function ($router) {

    $router->resource('/order', OrderController::class)->names('admin.order');

});
