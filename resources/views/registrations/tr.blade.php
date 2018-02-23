<tr>
    <td>{{$value->id}}</td>
    <td>{{$value->section_id}}</td>
    <td>{{$value->user_id }}</td>
    <td><a href="{{ route('registration.edit',  ['course' => $section->course_id, 'section' => $value->section_id, 'registration' => $value->id]) }}"><i class="pull-right fa fa-gear"></i></a><a href="{{ route('registration.show',  ['course' => $section->course_id, 'section' => $value->section_id, 'registration' => $value->id]) }}">View</a></td>
</tr>





