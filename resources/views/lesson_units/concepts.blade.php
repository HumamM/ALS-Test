@extends('layouts.app')

@section('content')
<div style="height:2px;font-size:0px;">&nbsp;</div>
<a href="/lesson_units/{{$lesson_unit->id}}" class="btn btn-outline-secondary btn-light">Go Back</a>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$lesson_unit->title}}</div>
                <div class="card-body">
                    <a href="/{{$lesson_unit->id}}/concepts/create" class="btn btn-primary">Create Concept</a>
                    <p>
                    <h3>Concepts for This Lesson</h3>
                    @if(count($concepts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($concepts as $concept)
                                <tr>
                                    <td>{{$concept->title}}</td>
                                    <td><a href="/concepts/{{$concept->id}}/edit" class="btn btn-outline-secondary btn-light">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action'=> ['ConceptsController@destroy', $concept->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>

                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>There are no concepts for this lesson.</p>
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
