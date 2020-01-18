@extends('layouts.app')

@section('content')
    <h1>Edit Lesson Unit</h1>
    {{Form::open(['action'=> ['Lesson_unitsController@update', $lesson_unit->id], 'method' => 'POST'])}}
	    <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $lesson_unit->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('description', 'Description')}}
                {{Form::text('description', $lesson_unit->description, ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {{Form::close()}}
@endsection