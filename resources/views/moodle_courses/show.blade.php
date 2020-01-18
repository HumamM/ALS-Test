@extends('layouts.app')

@section('content')
    <div style="height:2px;font-size:0px;">&nbsp;</div>
    <a href="/moodle_courses" class="btn btn-outline-secondary btn-light">Go Back</a>
    <h1>{{$course->fullname}}</h1>
    <div>
        {!!$course->summary!!}
    <div>
    <hr>
        <small>Created at {{$course->created_at}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $course->user_id)
            <a href="/moodle_courses/{{$course->id}}/edit" class="btn btn-outline-secondary btn-light">Refresh Course</a>
            <a href="/moodle_courses/{{$course->id}}/showconcepts" class="btn btn-outline-secondary btn-light">Concepts</a>
            <a href="/moodle_courses/{{$course->id}}/concepts" class="btn btn-outline-secondary btn-light">Create/Update Concepts</a>
            <a href="/moodle_courses/{{$course->id}}/course_modules" class="btn btn-outline-secondary btn-light">Show Course Modules</a>
            {!!Form::open(['action'=> ['CourseModulesController@storemodules'], 'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Add Course Modules', ['class' => 'btn btn-info'])}}
            {!!Form::close()!!}

            {!!Form::open(['action'=> ['MoodleCoursesController@destroy', $course->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection