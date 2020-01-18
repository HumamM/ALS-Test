@extends('layouts.app')

@section('content')
    <h1>Concepts</h1>
    @if(count($concepts)> 0)
        @foreach($concepts as $concept)
            <div class="card">
            <h3><a href="/moodle_concepts/{{$concept->id}}">{{$concept->title}}</a></h3>
            <small>part of {{$concept->moodle_course->fullname}}</small>
            </div>
        @endforeach

    @else
        <p>No concepts found.</p>
    @endif
@endsection