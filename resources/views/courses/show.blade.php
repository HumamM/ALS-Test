@extends('layouts.app')

@section('content')
    <div style="height:2px;font-size:0px;">&nbsp;</div>
    <a href="/courses" class="btn btn-outline-secondary btn-light">Go Back</a>
    <h1>{{$course->title}}</h1>
    <div>
        {!!$course->description!!}
    <div>
    <hr>
        <small>Created at {{$course->created_at}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $course->user_id)
            <a href="/courses/{{$course->id}}/edit" class="btn btn-outline-secondary btn-light">Edit Course</a>
            <a href="/courses/{{$course->id}}/showlessons" class="btn btn-outline-secondary btn-light">Lesson Units</a>
            <a href="/courses/{{$course->id}}/lessons" class="btn btn-outline-secondary btn-light">Create/Update Lesson Units</a>
            <a href="/courses/{{$course->id}}/learning_objects/create" class="btn btn-outline-secondary btn-light">Add Learning Objects</a>
            <a href="/quizzes/{{$course->id}}/" class="btn btn-outline-secondary btn-light">Add Quizz!</a>


    {!!Form::open(['action'=> ['CoursesController@destroy', $course->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection