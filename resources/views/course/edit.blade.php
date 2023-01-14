
@extends('layouts.layout')

@section('title', 'Courses-edit')

@section('content')

<h1>Editar el curso: {{$course->name}}</h1>

    <form action="{{ route('courses.update',$course->id) }}" method="post">

        @csrf

        @method('put')

        <label>
            Nombre:<br>
            <input type="text" name="name" value="{{old('name', $course->name)}}">
        </label>
        @error('name')
            <br>
                <small>{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            Descripcion:<br>
            <textarea type="text" name="description" rows="5">{{old('description', $course->description)}}</textarea>
        </label>
        @error('description')
            <br>
                <small>{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            Categoria:<br>
            <input type="text" name="category" value="{{old('category', $course->category)}}">
        </label>
        @error('category')
        <br>
            <small>{{$message}}</small>
        <br>
        @enderror
        <br>
        <button type="submit">Actualizar</button>
    </form>

@endsection

