@extends('theme.mdb')
@section('title')
    {{ $animals->name }}
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="d-grid gap-2">
                    <a class="btn btn-outline-dark btn-lg" data-mdb-ripple-color="dark" href="{{ url('/') }}/dog"><i
                            class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <!-- Navbar -->
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <div class="container-fluid">
                                    <strong class="navbar-brand me-2">รายละเอียด</strong>
                                    <!-- Toggle button -->
                                    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                                        data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <i class="fas fa-chevron-down"></i>
                                    </button>
                                    <!-- Collapsible wrapper -->
                                    <div class="collapse navbar-collapse" id="navbarButtonsExample">
                                        <!-- Left links -->
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>

                                        <!-- Right links -->
                                        <div class="d-flex align-items-center">
                                            <a class="btn btn-warning me-2" data-mdb-ripple-color="dark"
                                                href="{{ url('/') }}/dog/{{ $animals->id }}/edit">แก้ไข</a>
                                            <form action="{{ url('/') }}/dog/{{ $animals->id }}" method="POST"
                                                onsubmit="return validate();" style="display:inline">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-danger" data-mdb-ripple-color="dark"
                                                    type="submit">ลบ</button>
                                            </form>
                                            <script>
                                                function validate() {
                                                    var wantToDelete = confirm('คุณต้องการลบข้อมูลนี้ ใช่หรือไม่?');
                                                    if (wantToDelete) {
                                                        return true;
                                                    } else {
                                                        return false;
                                                    }
                                                }
                                            </script>
                                        </div>
                                    </div>
                                    <!-- Collapsible wrapper -->
                                </div>
                            </nav>
                            <!-- Navbar -->
                            <ul class="list-group list-group-flush">
                                <img src="{{ isset($animals->image) ? asset('storage/'.$animals->image) : asset('source/background.png') }}"
                                    class="card-img-top" alt="...">
                            </ul>
                            <div class="card-body">
                                <p class="card-text">
                                    <strong>ID : </strong>
                                    {{ isset($animals->id) ? $animals->id : '0000' }}
                                </p>
                                <p class="card-text">
                                    <strong>ชื่อ : </strong>
                                    {{ isset($animals->name) ? $animals->name : 'ไม่ทราบ' }}
                                </p>
                                <p class="card-text">
                                    <strong>พันธุ์ : </strong>
                                    {{ isset($animals->species) ? $animals->species : 'ไม่ทราบ' }}
                                </p>
                                <p class="card-text">
                                    <strong>ลาย : </strong>
                                    {{ isset($animals->marking) ? $animals->marking : 'ไม่ทราบ' }}
                                </p>
                                <p class="card-text">
                                    <strong>เพศ : </strong>
                                    {{ isset($animals->gender) ? $animals->gender : 'ไม่ทราบ' }}
                                </p>
                                <p class="card-text">
                                    <strong>ปลอกคอสี : </strong>
                                    {{ isset($animals->collar) ? $animals->collar : 'ไม่ทราบ' }}
                                </p>
                                <p class="card-text">
                                    <strong>อายุ : </strong>
                                    {{ isset($animals->age) ? $animals->age : 'ไม่ทราบอายุ' }} ปี
                                </p>
                                <p class="card-text">
                                    <strong>สถานะ : </strong>
                                    {{ isset($animals->status) ? $animals->status : 'ไม่ทราบ' }}
                                </p>
                                <p class="card-text">
                                    <strong>สถานะทำหมัน : </strong>
                                    {{ isset($animals->vet) ? $animals->vet : 'ไม่ทราบ' }}
                                </p>
                                <p class="card-text">
                                    <strong>เจ้าของ : </strong>
                                    {{ isset($animals->owner) ? $animals->owner : 'ไม่ทราบ' }}
                                </p>
                                <p class="card-text">
                                    <strong>สถานที่ : </strong>
                                    {{ isset($animals->location) ? $animals->location : 'ไม่ทราบ' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
