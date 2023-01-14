@extends('layouts.layout')

@section('title', 'Courses-creatre')

@section('content')

    <h1>Esta es la sección para crear cursos</h1>

    <form action="{{ route('courses.store') }}" method="post">

        @csrf

        <label>
            Nombre:<br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Descripcion:<br>
            <textarea type="text" name="description" rows="5"></textarea>
        </label>
        <br>
        <label>
            Categoría:<br>
            <select name="category">
                <option value="" selected hidden>Seleccione categoria</option>
                <option value="Web development">Web development</option>
                <option value="Mobile development">Mobile development</option>
            </select>
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>

@endsection
