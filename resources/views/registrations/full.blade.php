@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container col-md-8">

    <div class="box">
        <h1> {{$registration->id}}</h1>
        <h1>  {{$registration->section_id}}</h1>
        <h1>  {{$registration->user_id }}</h1>
        <h1>
            <a href="{{ route('registration.edit',  ['course' => $course, 'section' => $section, 'registration' => $registration->id]) }}"><i
                        class="pull-right fa fa-gear"></i></a></h1>
    </div>


    </div>

@endsection
