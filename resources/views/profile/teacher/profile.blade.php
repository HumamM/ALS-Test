@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="row">

                <div class="col-sm-3">
                    <h2>Teacher Profile Panel</h2>
                    <img src="/images/user/default.png" alt="This is profile picture" class="profile-image rounded-circle">
                </div>
                
                <div class="col-sm-9">                    
                 <h3 class="profile-name"> {{Auth::User()->teachers->material_name}}</h3> 
                 <hr>
                 <div class="button-primary">
                     <h1>Edit Profile</h1>
                     {{Form::open(['action'=> ['TeacherController@update', Auth::User()->id], 'method' => 'POST'])}}
                     <div class="form-group">
                        {{Form::label('material_name', 'Material Name')}}
                        {{Form::text('material_name', Auth::User()->material_name, ['class' => 'form-control', 'placeholder' => 'Material Name'])}}
                    </div>
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                    {{Form::close()}}
                </div>
            </div>
        </div>

@endsection
