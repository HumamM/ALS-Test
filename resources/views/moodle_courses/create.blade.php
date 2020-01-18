@extends('layouts.app')

@section('content')
    <h1>Add Moodle Course</h1>
    {{Form::open(['action'=> 'MoodleCoursesController@store', 'method' => 'POST'])}}
	    <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div><select class='form-control select2' name='fullname'>
            <option  disabled selected value></option>
            @foreach ($courses as $course)
                <option value="{{$course['fullname']}}">{{$course['fullname']}}</option>
            @endforeach</select></div>
        <div class="form-group">
                {{Form::label('description', 'Description')}}
                {{Form::textarea('description', '', ['id'=>'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {{Form::close()}}
@endsection