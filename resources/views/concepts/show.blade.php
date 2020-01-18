@extends('layouts.app')

@section('content')
    <div style="height:2px;font-size:0px;">&nbsp;</div>
    <a href="{{URL::previous()}}" class="btn btn-outline-secondary btn-light">Go Back</a>
    <br><br>
    <h1>{{$concept->title}}</h1>
    @if(!Auth::guest())
        <a href="/concepts/{{$concept->id}}/edit" class="btn btn-outline-secondary btn-light">Edit concept</a>
        <a href="/concepts/{{$concept->id}}/addlearningobjects" class="btn btn-outline-secondary btn-light">Select Learning Objects</a>
        {!!Form::open(['action'=> ['ConceptsController@destroy', $concept->id], 'method' => 'POST', 'class' => 'float-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    @endif
@endsection