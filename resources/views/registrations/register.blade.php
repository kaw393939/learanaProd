@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="box">
            <div class="box-title">
                <h1>{{$courseTitle}}</h1>
                <hr>
            </div>
            <div class="box-body">

                <p>{{$courseDescription}}</p>
            </div>
            <div class="box-footer">
                @guest
                    <h3><a class="nav-link" href="{{ route('login') }}">Login to register</a></h3>


                @else
                    {!! form($form) !!}

                @endguest

            </div>

        </div>

    </div>
    </div>

@endsection