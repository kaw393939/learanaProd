<tr>
    <td>{{$value->id}}</td>
    <td>{{$value->name}}</td>
    <td><a href="{{ route('user.show', ['user' => $value->id]) }}">View User</a></td>
</tr>



