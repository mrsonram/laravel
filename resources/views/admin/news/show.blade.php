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
                            <strong>รายละเอียด</strong>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <strong>เรื่อง : </strong>
                                {{ isset($news->title) ? $news->title : 'ไม่มีข้อมูล' }}
                            </p>
                            <p class="card-text">
                                <strong>หัวข้อย่อย : </strong>
                                {{ isset($news->subtitle) ? $news->subtitle : 'ไม่มีข้อมูล' }}
                            </p>
                            <p class="card-text">
                                <strong>รายละเอียด : </strong>
                                {{ isset($news->detail) ? $news->detail : 'ไม่มีข้อมูล' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
