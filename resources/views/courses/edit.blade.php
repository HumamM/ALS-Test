@extends('layouts.app')

@section('content')
    <h1>Edit Course</h1>
    {{Form::open(['action'=> ['CoursesController@update', $course->id], 'method' => 'POST'])}}
	    <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $course->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('description', 'Description')}}
                {{Form::textarea('description', $course->description, ['id'=>'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {{Form::close()}}
@endsection