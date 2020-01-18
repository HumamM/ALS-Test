@extends('layouts.app')

@section('content')
    <h1>Moodle Courses</h1>
    @if(count($courses)> 0)
        @foreach($courses as $course)
            <div class="card">
                <h3><a href="/moodle_courses/{{$course->id}}">{{$course->fullname}}</a></h3>
                <small>Created at {{$course->created_at}} by {{$course->user->name}}</small>
            </div>
        @endforeach
       
    @else
        <p>No courses found</p>
    @endif
@endsection