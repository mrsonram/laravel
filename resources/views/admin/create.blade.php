@extends('theme.bootstrap_5')
@section('title', 'เพิ่มข้อมูล')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <strong>กรอกข้อมูล</strong>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/manage') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                    <!-- <form method="POST" action="{{ url('/') }}/manage">-->

                    {{ csrf_field() }}
                    {{ method_field('POST') }}

                    <div class="row">
                        <div class="col"></div>
                        <div class="col-12">
                            @include("admin/form")

                            <button type="submit" class="btn btn-primary">บันทึก</button>
                            <a href="{{ url('/') }}/manage" class="btn btn-secondary">ยกเลิก</a>
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
