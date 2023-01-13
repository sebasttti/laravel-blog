<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;

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

Route::get('/', HomeController::class);


Route::controller(CourseController::class)->group(function (){

    Route::get('/courses', 'index')->name('courses.index');

    Route::get('/courses/create', 'create')->name('courses.create');

    Route::get('/courses/show/{course}', 'show')->name('courses.show');

});