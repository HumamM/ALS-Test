@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$course->title}}</div>

                <div class="card-body">
                    <a href="/{{$course->id}}/lesson_units/create" class="btn btn-primary">Create Lesson Unit</a>
                    <p>
                    <h3>Lessons for This Course</h3>
                    @if(count($lesson_units) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($lesson_units as $lesson_unit)
                                <tr>
                                    <td>{{$lesson_unit->title}}</td>
                                    <td><a href="/lesson_units/{{$lesson_unit->id}}/edit" class="btn btn-outline-secondary btn-light">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action'=> ['Lesson_unitsController@destroy', $lesson_unit->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>

                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>There are no lessons for this course.</p>
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
