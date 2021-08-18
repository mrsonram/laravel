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
                                            document.querySelector("#inputcollar").value = "{{ isset($animals->collar) ? $animals->collar : '' }}";
                                            document.querySelector("#inputstatus").value = "{{ isset($animals->status) ? $animals->status : '' }}";
                                            document.querySelector("#inputvet").value = "{{ isset($animals->vet) ? $animals->vet : '' }}";
                                        </script>
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
