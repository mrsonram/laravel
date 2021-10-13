@extends('theme/mdb')
@section('title', 'ข้อความ (สำหรับผู้ดูแลระบบ)')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="d-grid gap-2">
                    <a class="btn btn-outline-dark btn-lg" data-mdb-ripple-color="dark" href="{{ url('/') }}/home"><i
                            class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="col-10">
                <nav class="navbar navbar-light bg-white">
                    <div class="container">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                        <form class="d-flex" action="{{ url('/') }}/contact" method="GET">
                            <input name="search" class="form-control rounded" type="search" placeholder="ค้นหา"
                                aria-label="Search" value="{{ $search }}">
                            <span class="input-group-text border-0" id="search-addon">
                                <i class="fas fa-search"></i>
                            </span>
                        </form>
                    </div>
                </nav>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"><strong>ชื่อ</strong></th>
                            <th scope="col"><strong>Email</strong></th>
                            <th scope="col"><strong>เรื่อง</strong></th>
                            <th scope="col"><strong>รายละเอียด</strong></th>
                            <th scope="col"><strong>จัดการ</strong></th>
                        </tr>
                    </thead>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td scope="col">{{ isset($contact->name) ? $contact->name : 'ไม่มีข้อมูล' }}</td>
                            <td scope="col">{{ isset($contact->email) ? $contact->email : 'ไม่มีข้อมูล' }}</td>
                            <td scope="col">{{ isset($contact->title) ? $contact->title : 'ไม่มีข้อมูล' }}</td>
                            <td scope="col">{{ isset($contact->message) ? $contact->message : 'ไม่มีข้อมูล' }}</td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <a class="btn btn-outline-info" data-mdb-ripple-color="dark"
                                        href="{{ url('/') }}/contact/{{ $contact->id }}"><i
                                            class="fas fa-info"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
