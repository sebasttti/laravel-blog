<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourse;
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

    public function show(Course $course){

        //$course = Course::find($id);

        //return $course;

        return view('course.show',['course'=>$course]);
    }

    public function edit(Course $course){

        return view('course.edit',['course'=>$course]);
    }

    public function update(Request $request, Course $course){

        //En caso de fallar, de devuelve a la pantalla de donde viene

        $request->validate([
            'name'=>'required',
            'description' => 'required',
            'category' => 'required'
        ]);

        $course->update($request->all());

        /* $course->name = $request->name;
        $course->description = $request->description;
        $course->category = $request->category;

        $course->save(); */

        return redirect()->route('courses.show',$course);
        
    }


    public function store(StoreCourse $request){

        //En caso de fallar, de devuelve a la pantalla de donde viene

        /* $course = new Course();

        $course->name = $request->name;
        $course->description = $request->description;
        $course->category = $request->category;

        $savingData = $course->save(); */

        /* $course = Course::create([
            'name' => $request->name,
            'descripcion' => $request->description,
            'categoria' => $request->category
        ]); */

        $course = Course::create($request->all());

        return redirect()->route('courses.show',$course);
        
        
        //$course = Course::find($id);

        //return $course;

        //return view('course.show',['thisCourse'=>$course]);
    }

    public function destroy(Course $course){
        $course->delete();

        return redirect()->route('courses.index');
    }
}

/* Route::get("courses/{curso}/{category?}", function ($course, $category = null){
    $category = $category ? $category : 'sin categoria';

    return "Bienvenido al curso $course  - $category";

}); */