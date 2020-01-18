@extends('layouts.app')

@section('content')
    <h1>Concepts</h1>
    @if(count($concepts)> 0)
        @foreach($concepts as $concept)
            <div class="card">
            <h3><a href="/concepts/{{$concept->id}}">{{$concept->title}}</a></h3>
            <small>part of {{$concept->lesson_unit->title}}</small>
            </div>
        @endforeach
        {{$concepts->links()}}
    @else
        <p>No concepts found.</p>
    @endif
@endsection