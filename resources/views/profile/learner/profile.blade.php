@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Learner Dashboard</div>

                <div class="card-body">
                    <a href="/courses/create" class="btn btn-primary">Create Course</a>
                    <p>
                    <h3>Your Courses</h3>
                    @if(count($courses) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($courses as $course)
                                <tr>
                                    <td>{{$course->title}}</td>
                                    <td><a href="/courses/{{$course->id}}/edit" class="btn btn-outline-secondary btn-light">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action'=> ['CoursesController@destroy', $course->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>

                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no courses.</p>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection
