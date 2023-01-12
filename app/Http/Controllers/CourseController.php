<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        return view('course.index');
    }

    public function create(){
        return view('course.create');
    }

    public function show($course){
        return view('course.show',['course'=>$course]);
    }
}

/* Route::get("courses/{curso}/{category?}", function ($course, $category = null){
    $category = $category ? $category : 'sin categoria';

    return "Bienvenido al curso $course  - $category";

}); */