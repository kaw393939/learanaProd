@extends('layouts.app')

@section('content')

    <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="row">


        <div class="box ml-3 mr-3">
            <div class="box-header with-border">
                <h3 class="box-title">Registrations -    <a href="{{route('registration.create',['course' => $section->course_id,'section' => $section->id])}}">Link To Registration</a>
                </h3>
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Reg ID</th>
                            <th>Section ID</th>
                            <th>User ID</th>
                            <th>View Registration</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($registrations as $key => $value)
                            @include('registrations.tr')
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


