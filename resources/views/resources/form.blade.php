@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="box">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!! form($form) !!}

        </div>
    </div>
@endsection