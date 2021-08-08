<h1>Pets List</h1>
<div>
<a href="{{ url('/') }}/home/create"> New Pets</</div>
<table border=1>
<tr>
<th>animal_id</th>
<th>name</th>
<th>type</th>
<th>gender</th>
<th>Image</th>
<th>action</th>
</tr>
@foreach($animals as $animals)
<tr>
<td>{{ $animals->id }} </td>
<td>{{ $animals->name }} </td>
<td>{{ $animals->type }}</td>
<td>{{ $animals->gender }}</td>
<td><img src="{{ Storage::url($animals->pictures) }}" height="75" width="75" alt="" /></td>
<td>
    <a href="{{ url('/') }}/home/{{ $animals->id }}">View</a>
    <a href="{{ url('/') }}/home/{{ $animals->id }}/edit">Edit</a>
</td>

</tr>
@endforeach
</table>
