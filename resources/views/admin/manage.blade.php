@extends('theme/mdb')
@section('title', 'จัดการข้อมูล (สำหรับผู้ดูแลระบบ)')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-2">
            <div class="d-grid gap-2">
                <a class="btn btn-outline-dark btn-lg" data-mdb-ripple-color="dark" href="{{ url('/') }}/home"><i class="fas fa-arrow-left"></i></a>
            </div>
            <!--<div class="card bg-light">
                <div class="card-header">
                    <strong>เมนู</strong>
                </div>
                <ul class="list-group list-group-flush">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action" href="{{ url('/') }}/home">กลับหน้าแรก</a>
                    </div>
                </ul>
              </div>-->
        </div>
        <div class="col-10">
            <nav class="navbar navbar-light bg-white">
                <div class="container">
                    <a class="btn btn-dark px-3" href="{{ url('/') }}/create" role="button">
                        <i class="fas fa-plus-circle fa-lg"></i>
                    </a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                    <form class="d-flex" action="{{ url('/') }}/manage" method="GET">
                        <input name="q" class="form-control rounded" type="search" placeholder="ค้นหา" aria-label="Search" value="{{ $q }}">
                        <span class="input-group-text border-0" id="search-addon">
                            <i class="fas fa-search"></i>
                        </span>
                    </form>
                </div>
            </nav>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ชื่อ</th>
                        <th scope="col">พันธุ์</th>
                        <th scope="col">ลาย</th>
                        <th scope="col">เพศ</th>
                        <th scope="col">ปลอกคอสี</th>
                        <th scope="col">อายุ</th>
                        <th scope="col">สถานะ</th>
                        <th scope="col">สถานะทำหมัน</th>
                        <th scope="col">เจ้าของ</th>
                        <th scope="col">จัดการ</th>
                    </tr>
                </thead>
                @foreach($animals as $animals)
                    <tr>
                        <td scope="col">{{ isset($animals->name) ? $animals->name : 'ไม่ทราบ' }}</td>
                        <td scope="col">{{ isset($animals->species) ? $animals->species : 'ไม่ทราบ' }}</td>
                        <td scope="col">{{ isset($animals->marking) ? $animals->marking : 'ไม่ทราบ' }}</td>
                        <td scope="col">{{ isset($animals->gender) ? $animals->gender : 'ไม่ทราบ' }}</td>
                        <td scope="col">{{ isset($animals->collar) ? $animals->collar : 'ไม่ทราบ' }}</td>
                        <td scope="col">{{ isset($animals->age) ? $animals->age : 'ไม่ทราบ' }}</td>
                        <td scope="col">{{ isset($animals->status) ? $animals->status : 'ไม่ทราบ' }}</td>
                        <td scope="col">{{ isset($animals->vet) ? $animals->vet : 'ไม่ทราบ' }}</td>
                        <td scope="col">{{ isset($animals->owner) ? $animals->owner : 'ไม่ทราบ' }}</td>
                        <td>
                        <div class="d-grid gap-2 d-md-block">
                            <a class="btn btn-outline-info" data-mdb-ripple-color="dark" href="{{ url('/') }}/manage/{{ $animals->id }}"><i class="fas fa-info"></i></a>
                            <!--<a class="btn btn-warning btn-sm" href="{{ url('/') }}/manage/{{ $animals->id }}/edit">Edit</a>
                            <form action="{{ url('/') }}/manage/{{ $animals->id }}" method="POST" onsubmit="validate();" style="display:inline">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>-->
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
@endsection
