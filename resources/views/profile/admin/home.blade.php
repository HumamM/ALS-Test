@extends('layouts.app')




@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-sm-10">
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
             <a href="{{route('admin.edit',Auth::User()->id)}}" class="btn btn-success">Edit My Profile</a>

            </div>{{--col-sm-9--}}
        </div>{{--row--}}
    </div>{{--col-sm-10--}}
 </div>{{--row justify-content-center--}}
</div>{{--container--}}
@endsection