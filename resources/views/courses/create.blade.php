@extends('layouts.app')

@section('content')
    <h1>Create Course</h1>
    {{Form::open(['action'=> 'CoursesController@store', 'method' => 'POST'])}}
	    <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('description', 'Description')}}
                {{Form::textarea('description', '', ['id'=>'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {{Form::close()}}
@endsection