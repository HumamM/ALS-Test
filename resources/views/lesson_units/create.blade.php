@extends('layouts.app')

@section('content')
    <h1>Create Lesson Unit</h1>
    {{Form::open(['action'=> 'Lesson_unitsController@store', 'method' => 'POST'])}}
	    <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => '"Lesson 1" or "Lesson One"'])}}
        </div>
        <div class="form-group">
                {{Form::label('description', 'Description')}}
                {{Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {{Form::close()}}
@endsection