@extends('theme.bootstrap_5')
@section('title')
    {{ $contact->name }}
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
                    <li class="list-group-item">
                        <a class="card-item" aria-current="page" href="{{ url('/') }}/contact">กลับหน้าหลัก</a>
                    </li>
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
                                <strong>ชื่อ : </strong>
                                {{ isset($contact->name) ? $contact->name : 'ไม่มีข้อมูล' }}
                            </p>
                            <p class="card-text">
                                <strong>Email : </strong>
                                {{ isset($contact->email) ? $contact->email : 'ไม่มีข้อมูล' }}
                            </p>
                            <p class="card-text">
                                <strong>เรื่อง : </strong>
                                {{ isset($contact->title) ? $contact->title : 'ไม่มีข้อมูล' }}
                            </p>
                            <p class="card-text">
                                <strong>รายละเอียด : </strong>
                                {{ isset($contact->message) ? $contact->message : 'ไม่ทราบ' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
