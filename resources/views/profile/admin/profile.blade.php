@extends('layouts.app')




@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-10">
            <div class="row">

                <div class="col-sm-3">
                    <h2>Admin Profile Panel</h2>
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


                    <div class="form-group">
                        {{Form::label('admin_number', 'Admin Number')}}
                        {{Form::text('admin_number', Auth::User()->admin_number, ['class' => 'form-control', 'placeholder' => 'Admin Number'])}}
                    </div>
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                    {{Form::close()}}
                </div>
            </div>
        </div>
        <hr>
    </div>
</div>
</div>
@endsection
