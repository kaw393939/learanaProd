<tr>
    <td>{{$value->id}}</td>
    <td>{{$value->course_id}}</td>
    <td>{{$value->url }}</td>
    <td><a href="{{ route('resource.edit', ['course' => $value->course,'resource' => $value->id]) }}"><i class="pull-right fa fa-gear"></i></a><a href="{{route('resource.show',['course' => $value->course,'resource' => $value->id])}}">View</a></td>
</tr>