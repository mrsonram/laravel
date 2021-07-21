<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!DOCTYPE html>
<span style="font-family: Google Sans">
<head>
    <title>จัดการข้อมูล</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}/home">Manage</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}/create">Add Info</a>
                </li>
            </ul>
            <form class="d-flex" action="#!" method="GET">
                <input name="q" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="">
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
                        <th scope="col">เพศปลอกคอสี</th>
                        <th scope="col">อายุ</th>
                        <th scope="col">สถานะ</th>
                        <th scope="col">สถานะทำหมัน</th>
                        <th scope="col">เจ้าของ</th>
                        <th scope="col">รูป</th>
                        <th scope="col">จัดการ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col">ตูบ #1</td>
                        <td scope="col">สุนัข</td>
                        <td scope="col">ไทยสผม</td>
                        <td scope="col">ขาว ดำ</td>
                        <td scope="col">สีเขียว</td>
                        <td scope="col">6 ปี</td>
                        <td scope="col">ยังมีชีวิต</td>
                        <td scope="col">ทำหมันแล้ว</td>
                        <td scope="col">ไม่ทราบ</td>
                        <td scope="col">รูป</td>
                        <td>
                        <div class="d-grid gap-2 d-md-block">
                            <a class="btn btn-info btn-sm" href="#!">View</a>
                            <a class="btn btn-warning btn-sm" href="#!">Edit</a>
                            <form action="#!" method="POST" onsubmit="validate();" style="display:inline">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td scope="col">ตูบ #2</td>
                        <td scope="col">สุนัข</td>
                        <td scope="col">ไทยสผม</td>
                        <td scope="col">ขาว</td>
                        <td scope="col">สีเหลือง</td>
                        <td scope="col">8 ปี</td>
                        <td scope="col">ยังมีชีวิต</td>
                        <td scope="col">ทำหมันแล้ว</td>
                        <td scope="col">ไม่ทราบ</td>
                        <td scope="col">รูป</td>
                        <td>
                        <div class="d-grid gap-2 d-md-block">
                            <a class="btn btn-info btn-sm" href="#!">View</a>
                            <a class="btn btn-warning btn-sm" href="#!">Edit</a>
                            <form action="#!" method="POST" onsubmit="validate();" style="display:inline">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </div>
                        </td>
                    </tr>
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
