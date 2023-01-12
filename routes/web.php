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

Route::get('/courses', [CourseController::class,'index']);

Route::get('/courses/create', [CourseController::class,'create']);

Route::get('/courses/show/{course}', [CourseController::class,'show']);


//Leo un curso en especifico

/* Route::get('/courses/{course}', function ($course) {
    //return view('welcome');
    return "El curso al que quiero acceder es $course";
}); */

/* Route::get("courses/{curso}/{category?}", function ($course, $category = null){
    $category = $category ? $category : 'sin categoria';

    return "Bienvenido al curso $course  - $category";

}); */