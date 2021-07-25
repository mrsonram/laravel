<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!DOCTYPE html>
<head>
    <title>จัดการข้อมูล</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}/manage">Manage</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}/create">Add Info</a>
                </li>
            </ul>
            <form class="d-flex" action="{{ url('/') }}/manage" method="GET">
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
                        <th scope="col">ชื่อ</th>
                        <th scope="col">ประเภท</th>
                        <th scope="col">พันธุ์</th>
                        <th scope="col">ลาย</th>
                        <th scope="col">เพศ</th>
                        <th scope="col">ปลอกคอสี</th>
                        <th scope="col">อายุ</th>
                        <th scope="col">สถานะ</th>
                        <th scope="col">สถานะทำหมัน</th>
                        <th scope="col">เจ้าของ</th>
                        <th scope="col">รูป</th>
                        <th scope="col">จัดการ</th>
                    </tr>
                </thead>
                @foreach($animals as $animal)
                    <tr>
                        <td scope="col">{{ $animal->animal_name }}</td>
                        <td scope="col">{{ $animal->animal_type }}</td>
                        <td scope="col">{{ $animal->animal_species }}</td>
                        <td scope="col">{{ $animal->animal_marking }}</td>
                        <td scope="col">{{ $animal->animal_gender }}</td>
                        <td scope="col">{{ $animal->animal_collar }}</td>
                        <td scope="col">{{ $animal->animal_age }}</td>
                        <td scope="col">{{ $animal->animal_status }}</td>
                        <td scope="col">{{ $animal->animal_vet }}</td>
                        <td scope="col">{{ $animal->owner }}</td>
                        <td scope="col">{{ $animal->pictures }}</td>
                        <td>
                        <div class="d-grid gap-2 d-md-block">
                            <a class="btn btn-info btn-sm" href="{{ url('/') }}/manage/{{ $animal->animal_id }}">View</a>
                            <a class="btn btn-warning btn-sm" href="{{ url('/') }}/manage/{{ $animal->animal_id }}/edit">Edit</a>
                            <form action="{{ url('/') }}/manage/{{ $animal->animal_id }}" method="POST" onsubmit="validate();" style="display:inline">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </div>
                        </td>
                    </tr>
                @endforeach
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
