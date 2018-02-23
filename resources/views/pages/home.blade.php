
<h1>My Courses</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <td>Title</td>
        <td>Description</td>
        <td>Publish</td>

    </tr>
    </thead>
    <tbody>
    @foreach($courses as $key => $value)

        <div class="box box-solid">
            <div class="box-header with-border">
                <i class="fa fa-text-width"></i>

                <h3 class="box-title"><div class="card-title">{{ $value->title }}</div>/h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                {{ $value->description }}


            </div>
            <!-- /.box-body -->
        </div>

    @endforeach
    </tbody>
</table>
