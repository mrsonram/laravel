@extends('theme/bootstrap_5')
@section('title', 'ข้อความ (สำหรับผู้ดูแลระบบ)')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    <strong>เมนู</strong>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a class="card-item" aria-current="page" href="{{ url('/') }}/manage">หน้าแรก</a>
                    </li>
                </ul>
              </div>
        </div>
        <div class="col-9">
            <nav class="navbar navbar-light bg-white">
                <div class="container">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                    <form class="d-flex" action="{{ url('/') }}/contact" method="GET">
                        <input name="search" class="form-control me-2" type="search" placeholder="ค้นหา" aria-label="Search" value="{{ $search }}">
                        <button class="btn btn-primary" type="submit">ค้นหา</button>
                    </form>
                </div>
            </nav>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ชื่อ</th>
                        <th scope="col">Email</th>
                        <th scope="col">เรื่อง</th>
                        <th scope="col">รายละเอียด</th>
                        <th scope="col">จัดการ</th>
                    </tr>
                </thead>
                @foreach($contacts as $contact)
                <tr>
                    <td scope="col">{{ isset($contact->name) ? $contact->name : "ไม่มีข้อมูล" }}</td>
                    <td scope="col">{{ isset($contact->email) ? $contact->email : "ไม่มีข้อมูล" }}</td>
                    <td scope="col">{{ isset($contact->title) ? $contact->title : "ไม่มีข้อมูล" }}</td>
                    <td scope="col">{{ isset($contact->message) ? $contact->message : "ไม่มีข้อมูล" }}</td>
                    <td>
                        <div class="d-grid gap-2 d-md-block">
                            <a class="btn btn-info btn-sm" href="{{ url('/') }}/contact/{{ $contact->id }}">View</a>
                            <form action="{{ url('/') }}/contact/{{ $contact->id }}" method="POST" onsubmit="validate();" style="display:inline">
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
                    else
                        {
                            this.close();
                        }
                }
            </script>
        </div>
      </div>
</div>
@endsection
