@extends('layouts.app')




@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="row">

                <div class="col-sm-3">
                    <h2>Admin Panel</h2>
                    <img src="/images/user/default.png" alt="This is profile picture" class="profile-image rounded-circle">
                </div>
                
                <div class="col-sm-9">                    
                 <h3 class="profile-name"> {{Auth::User()->admins->admin_number}}</h3> 
                 <hr>
                 <div class="button-primary">
                     <h1>Edit Profile</h1>
                     {{Form::open(['action'=> ['AdminController@update', Auth::User()->id], 'method' => 'POST'])}}
                     <div class="form-group">
                        {{Form::label('name', 'Name')}}
                        {{Form::text('name', Auth::User()->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
                    </div>
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                    {{Form::close()}}
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
               <h1>Editing Other Parts of the Application</h1>
               <br>
                <a href="{{url('/')}}" class="btn btn-success">Learners</a>
                <a href="{{url('/')}}" class="btn btn-success">Teachers</a>
                <a href="{{url('/')}}" class="btn btn-success">Courses</a>
                <a href="{{url('/')}}" class="btn btn-success">Results</a>
                <a href="{{url('/')}}" class="btn btn-success">Quizzes</a>
                <a href="{{url('/')}}" class="btn btn-success">Questions</a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
