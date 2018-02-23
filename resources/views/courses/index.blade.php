@extends('layouts.app')

@section('content')


    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body">
                        <!-- /.box-header -->
                        {!! $records !!}
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
