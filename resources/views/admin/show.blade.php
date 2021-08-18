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
                    <strong>Manage</strong>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a class="card-item" aria-current="page" href="{{ url('/') }}/manage">Back</a>
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
                        <ul class="list-group list-group-flush">
                            <img src="{{ asset($animals->image) }}" class="card-img-top" alt="...">
                        </ul>
                        <div class="card-body">
                            <p class="card-text">
                                <strong>ID : </strong>
                                {{ $animals->id }}
                            </p>
                            <p class="card-text">
                                <strong>ชื่อ : </strong>
                                {{ $animals->name }}
                            </p>
                            <p class="card-text">
                                <strong>พันธุ์ : </strong>
                                {{ $animals->species }}
                            </p>
                            <p class="card-text">
                                <strong>ลาย : </strong>
                                {{ $animals->marking }}
                            </p>
                            <p class="card-text">
                                <strong>เพศ : </strong>
                                {{ $animals->gender }}
                            </p>
                            <p class="card-text">
                                <strong>ปลอกคอสี : </strong>
                                {{ $animals->collar }}
                            </p>
                            <p class="card-text">
                                <strong>อายุ : </strong>
                                {{ $animals->age }} ปี
                            </p>
                            <p class="card-text">
                                <strong>สถานะ : </strong>
                                {{ $animals->status }}
                            </p>
                            <p class="card-text">
                                <strong>สถานะทำหมัน : </strong>
                                {{ $animals->vet }}
                            </p>
                            <p class="card-text">
                                <strong>เจ้าของ : </strong>
                                {{ $animals->owner }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
