<h1>Position List</h1>
<div>
    <a href="{{ url('/') }}/position/create"> New Position</a>
</div>
<div>
	<form action="{{ url('/') }}/position" method="GET">
		<input name="q" placeholder="type your keyword..." value="{{ $q }}">
		<button type="submit">Search</button>
	</form>
</div>
<table border=1>
    <tr>
        <th>รหัส</th>
        <th>ตำแหน่ง</th>
        <th>จัดการ</th>
    </tr>
    @foreach($positions as $position)
    <tr>
        <td>{{ $position->position_id }}</td>
        <td>{{ $position->position_name }}</td>

        <td>
			<a href="{{ url('/') }}/position/{{ $position->position_id }}">View</a>
			<a href="{{ url('/') }}/position/{{ $position->position_id }}/edit">Edit</a>
            <a href="{{ url('/') }}/position/{{ $position->position_id }}/delete">Delete</a>
		</td>
    </tr>
    @endforeach
</table>