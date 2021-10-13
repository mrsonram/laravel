@extends('theme.mdb')
@section('title')
    {{ $animals->name }}
@endsection
@section('content')
    <!-- Container -->
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="d-grid gap-2">
                    <a class="btn btn-outline-dark btn-lg" data-mdb-ripple-color="dark" href="{{ url('/') }}/dog"><i
                            class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="col-md-8">
                    <!-- Card Front -->
                    <div class="card">
                        <div class="card-header">
                            <h5><strong>แก้ไขรายละเอียด</strong></h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <img src="{{ isset($animals->image) ? asset('storage/' . $animals->image) : asset('source/background.png') }}"
                                class="card-img-top" alt="...">
                        </ul>
                        <!-- Card Body Front-->
                        <div class="card-body">
                            <form class="row g-3 needs-validation" novalidate method="POST"
                                action="{{ url('/') }}/dog/{{ $animals->id }}" accept-charset="UTF-8"
                                class="form-horizontal" enctype="multipart/form-data">

                                {{ csrf_field() }}
                                {{ method_field('PUT') }}

                                @include("admin/dogs/form")
                                <script>
                                    document.querySelector("#gender").value = "{{ isset($animals->gender) ? $animals->gender : 'ตัวเลือก' }}";
                                    document.querySelector("#collar").value = "{{ isset($animals->collar) ? $animals->collar : 'ตัวเลือก' }}";
                                    document.querySelector("#status").value = "{{ isset($animals->status) ? $animals->status : 'ตัวเลือก' }}";
                                    document.querySelector("#vet").value = "{{ isset($animals->vet) ? $animals->vet : 'ตัวเลือก' }}";
                                </script>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-success btn-lg"
                                        data-mdb-ripple-color="dark">อัพเดต</button>
                                </div>
                            </form>
                        </div>
                        <!--Card Body End -->
                    </div>
                    <!-- Card End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Container -->
@endsection
