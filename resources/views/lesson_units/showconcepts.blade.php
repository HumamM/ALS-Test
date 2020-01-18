@extends('layouts.app')

@section('content')
<h1>Concepts for {{$lesson_unit->title}}</h1>
    @if(count($concepts)> 0)
        @foreach($concepts as $concept)
            <div class="card">
            <h3><a href="/concepts/{{$concept->id}}">{{$concept->title}}</a></h3>
            </div>
        @endforeach

    @else
        <p>No concepts found.</p>
    @endif
@endsection