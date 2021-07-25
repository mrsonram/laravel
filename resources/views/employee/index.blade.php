<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!DOCTYPE html>
<span style="font-family: Google Sans">
<head>
    <title>Employee list</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}/employee">Employee List</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}/employee/create">Create Employee</a>
                </li>
            </ul>
            <form class="d-flex" action="{{ url('/') }}/employee" method="GET">
                <input name="q" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="{{ $q }}">
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Adress</th>
                        <th scope="col">Salary</th>
                        <th scope="col">Position ID</th>
                        <th scope="col">Position</th>
                        <th scope="col">Manage</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <td scope="col">{{ $employee->employee_id }}</td>
                        <td scope="col">{{ $employee->name }}</td>
                        <td scope="col">{{ $employee->age }}</td>
                        <td scope="col">{{ $employee->address }}</td>
                        <td scope="col">{{ $employee->salary }}</td>
                        <td scope="col">{{ $employee->position_id }}</td>
                        <td scope="col">{{ $employee->position->position_name }}</td>
                        <td>
                        <div class="d-grid gap-2 d-md-block">
                            <a class="btn btn-info btn-sm" href="{{ url('/') }}/employee/{{ $employee->employee_id }}">View</a>
                            <a class="btn btn-warning btn-sm" href="{{ url('/') }}/employee/{{ $employee->employee_id }}/edit">Edit</a>
                            <form action="{{ url('/') }}/employee/{{ $employee->employee_id }}" method="POST" onsubmit="validate();" style="display:inline">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <script>
                function validate()
                {
                    //SUBMIT
                    var wantToDelete= confirm('Are you sure to delete this item?');
                    if(wantToDelete)
                        {
                            this.submit();
                        }
                }
            </script>
        </div>
    </div>
</div>
</body>
</span>
