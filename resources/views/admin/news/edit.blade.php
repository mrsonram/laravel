@extends('theme.bootstrap_5')
@section('title')
    {{ $news->title }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-header">
                    <strong>เมนู</strong>
                </div>
                <ul class="list-group list-group-flush">
                    <!--<li class="list-group-item">
                        <a class="card-item" aria-current="page" href="{{ url('/') }}/manage">กลับหน้าหลัก</a>
                    </li>-->
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action" href="{{ url('/') }}/message">กลับหน้าหลัก</a>
                    </div>
                </ul>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <strong>แก้ไขรายละเอียด</strong>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ url('/') }}/message/{{ $news->id }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">

                                {{ csrf_field() }}
                                {{ method_field('PUT') }}

                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col-12">
                                        @include("admin/news/form")

                                        <button type="submit" class="btn btn-primary">อัพเดต</button>
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
