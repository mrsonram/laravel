<head>
    <span style="font-family: Google Sans">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand h1">Pets List</a>
            <form>
                <a class="btn btn-secondary" href="{{ url('/') }}/home/create">Create</a>
            </form>
        </div>
    </nav>

    <!-- Content -->
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Image</th>
                    <th>Option</th>
                </tr>
                </thead>
                <tbody>
                @foreach($animals as $animals)
                <tr>
                    <td>{{ $animals->id }} </td>
                    <td>{{ $animals->name }} </td>
                    <td>{{ $animals->gender }}</td>
                    <td><img src="{{ Storage::url($animals->image) }}" height="75" width="75" alt="" /></td>
                    <td>
                        <a class="btn btn-primary" href="{{ url('/') }}/home/{{ $animals->id }}">View</a>
                        <a class="btn btn-warning" href="{{ url('/') }}/home/{{ $animals->id }}/edit">Edit</a>
                        <form action="{{ url('/') }}/home/{{ $animals->id }}" method="POST" onsubmit="validate();" style="display:inline">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>

                </tr>
                @endforeach
          </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
