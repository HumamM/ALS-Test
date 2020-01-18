@extends('layouts.app')

@section('content')
    <h1>Course Modules</h1>
    @if(count($modules)> 0)
        @foreach($modules as $module)
            @foreach ($module['modules'] as $mod)
                <div class="card">
                <h3>{{$mod['name']}} ({{$mod['modname']}}) </h3>
                </div>
            @endforeach
        @endforeach
       
    @else
        <p>No course modules found</p>
    @endif
@endsection