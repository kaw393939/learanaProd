@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box">
            <div class="box-title"><h3>{{$resource->title}}</h3>
                <a href="{{ route('resource.edit', ['course' => $resource->course_id, 'resource' => $resource->id]) }}">
                    <i class="pull-right fa fa-gear"></i></a>

            </div>
            <iframe src="{{$resource->url}}"
                    width="560" height="315" frameborder="0" allowfullscreen></iframe>

        </div>
    </div>





@endsection