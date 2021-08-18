@extends('manage/theme')
@section('title')
    {{ $animals->name }}
@endsection
@section('content')
    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Edit Details</h1>
                        <input type="hidden" name="previous" value="{{ $animals->image }}">
                        <div class="form-group">
                        <img src="{{ asset($animals->image) }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('/') }}/index/{{ $animals->id }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">

                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            @include("manage/form")
                        <div class="col-6">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="{{ url('/') }}/index" class="btn btn-secondary">Cancel</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
        <script>
            document.querySelector("#inputgender").value = "{{ isset($animals->gender) ? $animals->gender : '' }}";
        </script>
@endsection
