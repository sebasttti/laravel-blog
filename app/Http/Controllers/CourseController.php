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

        $courses = Course::orderBy('id','desc')->paginate(5);

        return view('course.index', ['courses'=>$courses]);
    }

    public function create(){
        return view('course.create');
    }

    public function show($id){

        $course = Course::find($id);

        //return $course;

        return view('course.show',['course'=>$course]);
    }

    public function edit(Course $course){

        return view('course.edit',['course'=>$course]);
    }

    public function update(Request $request, Course $course){

        $course->name = $request->name;
        $course->description = $request->description;
        $course->category = $request->category;

        $course->save();

        return redirect()->route('courses.show',$course);
        
    }


    public function store(Request $request){

        $course = new Course();

        $course->name = $request->name;
        $course->description = $request->description;
        $course->category = $request->category;

        $savingData = $course->save();

        return redirect()->route('courses.show',$course);
        
        
        //$course = Course::find($id);

        //return $course;

        //return view('course.show',['thisCourse'=>$course]);
    }
}

/* Route::get("courses/{curso}/{category?}", function ($course, $category = null){
    $category = $category ? $category : 'sin categoria';

    return "Bienvenido al curso $course  - $category";

}); */