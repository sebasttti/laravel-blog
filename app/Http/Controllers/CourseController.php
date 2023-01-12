<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        return "Sección de cursos";
    }

    public function create(){
        return "Sección para crear cursos";
    }

    public function show($course){
        return "El curso escogido es $course";
    }
}
