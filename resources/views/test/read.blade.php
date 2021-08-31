<table class="table">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    @foreach ($data as $animals)
        <tr>
            <td>{{ $animals->id }}</td>
            <td>{{ $animals->name }}</td>
            <td>
                <button class="btn btn-warning" onClick="show({{ $animals->id }})">Edit</button>
                <button class="btn btn-danger" onClick="destroy({{ $animals->id }})">Delete</button>
            </td>
        </tr>
    @endforeach
</table>
