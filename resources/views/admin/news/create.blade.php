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
                    <form method="POST" action="{{ url('/message') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                    <!-- <form method="POST" action="{{ url('/') }}/manage">-->

                    {{ csrf_field() }}
                    {{ method_field('POST') }}

                    <div class="row">
                        <div class="col"></div>
                        <div class="col-12">
                            @include('admin/news/form')

                            <button type="submit" class="btn btn-success btn-lg">บันทึก</button>
                            <a href="{{ url('/') }}/message" class="btn btn-light btn-lg">ยกเลิก</a>
                        </div>
                        <div class="col"></div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
