<tr>
    <td>{{$value->user_id}}</td>
    <td>{{$value->course_id}}</td>
    <td>{{$value->start}}</td>
    <td>{{$value->end}}</td>
    <td>{{$value->open}}</td>
    <td>{{$value->close}}</td>
    <td>{{$value->status}}</td>
    <td>{{$value->publish}}</td>
    <td><a href="{{ route('section.edit',  ['course' => $value->course_id, 'section' => $value->id]) }}"><i class="pull-right fa fa-gear"></i></a><a href="{{ route('section.show', ['course' => $value->course_id, 'section' => $value->id]) }}"> View Roster</a></td>
</tr>



