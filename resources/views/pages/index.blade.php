@extends('layouts.app')
@section('content')
    <div class="jumbotron text-center">
            <div class="container">
            <h1>{{$title}}</h1>
            <p>This is the app from WASPEC</p>
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login &raquo;</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register &raquo;</a> </p>
            </div>
        </div>
@endsection



