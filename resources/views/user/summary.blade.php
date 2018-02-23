<div class="box box-solid">
    <div class="box-header with-border">
        <h3 class="box-title"><div class="card-title">{{ $value->title }}</div></h3>
        <a href="{{ route('course.edit', ['course' => $value->id]) }}"><i class="pull-right fa fa-gear"></i></a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        {{ $value->description }}<br>

        <a href="{{ route('course.show', ['course' => $value->id]) }}"> View Course</a>

    </div>
    <!-- /.box-body -->
</div>