@extends('theme.bootstrap_5')
@section('title')
    {{ $animals->name }}
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
                        <a class="list-group-item list-group-item-action" href="{{ url('/') }}/manage">กลับหน้าหลัก</a>
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
                        <ul class="list-group list-group-flush">
                            <img src="{{ isset($animals->image) ? asset($animals->image) : asset('images/background.png') }}" class="card-img-top" alt="...">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
