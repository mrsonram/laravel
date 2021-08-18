@extends('manage/theme')
@section('title')
    {{ $animals->name }}
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header text-center h3">{{ $animals->name }} (ID : {{ $animals->id }})</div>
                    <img src="{{ asset($animals->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">เพศ : {{ $animals->gender }}</p>
                        <a href="{{ url('/') }}/index" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
            <div class="col"></div>
          </div>
    </div>
@endsection
