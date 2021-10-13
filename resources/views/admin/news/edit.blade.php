@extends('theme/mdb')
@section('title')
    {{ $news->title }}
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="d-grid gap-2">
                    <a class="btn btn-outline-dark btn-lg" data-mdb-ripple-color="dark" href="{{ url('/') }}/message"><i
                            class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <strong>แก้ไขรายละเอียด</strong>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ url('/') }}/message/{{ $news->id }}"
                                accept-charset="UTF-8" class="row g-3 needs-validation" novalidate
                                enctype="multipart/form-data">

                                {{ csrf_field() }}
                                {{ method_field('PUT') }}


                                @include("admin/news/form")
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-success btn-lg"
                                        data-mdb-ripple-color="dark">อัพเดต</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
