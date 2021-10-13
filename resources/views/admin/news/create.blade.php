@extends('theme/mdb')
@section('title', 'เพิ่มข่าวสาร')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <strong>กรอกข้อมูล</strong>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('/message') }}" accept-charset="UTF-8"
                            class="row g-3 needs-validation" novalidate enctype="multipart/form-data">

                            {{ csrf_field() }}
                            {{ method_field('POST') }}

                            @include('admin/news/form')

                            <div class="col-12">
                                <button type="submit" class="btn btn-success btn-lg" data-mdb-ripple-color="dark">บันทึก</button>
                                <a href="{{ url('/') }}/message" class="btn btn-light btn-lg" data-mdb-ripple-color="dark">ยกเลิก</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
