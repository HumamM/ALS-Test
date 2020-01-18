@extends('layouts.app')

@section('content')
    <h1>Courses</h1>
    @if(count($courses)> 0)
        @foreach($courses as $course)
            <div class="card">
            <h3><a href="/courses/{{$course->id}}">{{$course->title}}</a></h3>
            <small>Created at {{$course->created_at}} by {{$course->user->name}}</small>
            </div>
        @endforeach
        {{$courses->links()}}
    @else
        <p>No courses found</p>
    @endif
@endsection