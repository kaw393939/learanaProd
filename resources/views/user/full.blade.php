@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="box ml-3 mr-3">
                <div class="box-header with-border">
                    <h3 class="box-title">User Name: {{ $user->name}}</h3>

                    <p class="lead">
                    <p>Bio: {{$user->bio}}</p>
                    <div class="box-footer">

                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="box ml-3 mr-3">
                <div class="box-header with-border">
                    <h3 class="box-title">Courses</h3>

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
                            @foreach($courses as $key => $value)
                                @include('courses.tr')
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