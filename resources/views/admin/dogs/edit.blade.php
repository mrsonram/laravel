@extends('theme.mdb')
@section('title')
    {{ $animals->name }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="d-grid gap-2">
                <a class="btn btn-outline-dark btn-lg" data-mdb-ripple-color="dark" href="{{ url('/') }}/manage"><i class="fas fa-arrow-left"></i></a>
            </div>
            <!--<div class="card">
                <div class="card-header">
                    <strong>เมนู</strong>
                </div>
                <ul class="list-group list-group-flush">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action" href="{{ url('/') }}/manage">กลับหน้าหลัก</a>
                    </div>
                </ul>
            </div>-->
        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <strong>แก้ไขรายละเอียด</strong>
                        </div>
                        <ul class="list-group list-group-flush">
                            <img src="{{ asset($animals->image) }}" class="card-img-top" alt="...">
                        </ul>
                        <div class="card-body">
                            <form method="POST" action="{{ url('/') }}/manage/{{ $animals->id }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">

                                {{ csrf_field() }}
                                {{ method_field('PUT') }}

                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col-12">
                                        @include("admin/form")
                                        <script>
                                            document.querySelector("#inputgender").value = "{{ isset($animals->gender) ? $animals->gender : 'ตัวเลือก' }}";
                                            document.querySelector("#inputcollar").value = "{{ isset($animals->collar) ? $animals->collar : 'ตัวเลือก' }}";
                                            document.querySelector("#inputstatus").value = "{{ isset($animals->status) ? $animals->status : 'ตัวเลือก' }}";
                                            document.querySelector("#inputvet").value = "{{ isset($animals->vet) ? $animals->vet : 'ตัวเลือก' }}";
                                        </script>
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-success btn-lg" data-mdb-ripple-color="dark">อัพเดต</button>
                                        </div>
                                    </div>
                                    <div class="col"></div>
                                  </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
