@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
    <div class="box ml-3 mr-3">
        <div class="box-header with-border">
            <h3 class="box-title">Title: {{ $course->title }}</h3>
            <a href="{{ route('course.edit', ['course' => $course->id]) }}"><i class="pull-right fa fa-gear"></i></a>

            <p class="lead">
            <p>Description: {{$course->description}}</p>
            <div class="box-footer">
                <p><a href="{{ route('section.create', ['course' => $course->id]) }}">Add Session</a></p>
                <p><a href="{{route('resource.create',['course' => $course->id])}}">Add Resource</a></p>
            </div>
        </div>
    </div>
    </div>


        <div class="row">
            <div class="box ml-3 mr-3">
                <div class="box-header with-border">
                    <h3 class="box-title">Course Resources</h3>

                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Course ID</th>
                                <th>URL</th>
                                <th>Publish</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($resources as $key => $value)
                                @include('resources.tr')
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer">
                        <div>
                            <ul class="pagination pagination-sm">
                                <li><a href="#">«</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
        <div class="box ml-3 mr-3">
            <div class="box-header with-border">
                <h3 class="box-title">Sessions</h3>
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Course ID</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>Open</th>
                            <th>Close</th>
                            <th>Status</th>
                            <th>Publish</th>
                            <th>Roster</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sections as $key => $value)
                            @include('sections.tr')
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="box-footer">
                    <div>
                        <ul class="pagination pagination-sm">
                            <li><a href="#">«</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection