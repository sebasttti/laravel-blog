<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){

        // Se traen los cursos

        //$courses = Course::all();

            //Sirve para paginar - utiliza GET['page'];

        $courses = Course::paginate(5);

        return view('course.index', ['courses'=>$courses]);
    }

    public function create(){
        return view('course.create');
    }

    public function show($id){

        $course = Course::find($id);

        //return $course;

        return view('course.show',['thisCourse'=>$course]);
    }
}

/* Route::get("courses/{curso}/{category?}", function ($course, $category = null){
    $category = $category ? $category : 'sin categoria';

    return "Bienvenido al curso $course  - $category";

}); */