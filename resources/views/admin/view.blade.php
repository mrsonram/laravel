@extends('theme.mdb')
@section('title')
    {{ $contact->name }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="d-grid gap-2">
                <a class="btn btn-outline-dark btn-lg" data-mdb-ripple-color="dark" href="{{ url('/') }}/contact"><i class="fas fa-arrow-left"></i></a>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="col-md-8">
                    <div class="card bg-light">
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
                            <form action="{{ url('/') }}/contact/{{ $contact->id }}" method="POST" onsubmit="validate();" style="display:inline">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger btn-lg" type="submit">ลบ</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
