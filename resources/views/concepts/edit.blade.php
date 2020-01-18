@extends('layouts.app')

@section('content')
    <h1>Edit Concept</h1>
    {{Form::open(['action'=> ['ConceptsController@update', $concept->id], 'method' => 'POST'])}}
	    <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $concept->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {{Form::close()}}
@endsection