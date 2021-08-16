@extends('admin/theme')
@section('content')
<div class="container">
    <h1>Create New Pet</h1>
    <a href="{{ url('/') }}/manage">กลับ</a>
    <form method="POST" action="{{ url('/') }}/manage">

        {{ csrf_field() }}
        {{ method_field('POST') }}

        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                @include("admin/form")
                <div class="form-group">
                    <strong>รูปภาพ</strong>
                        <input type="file" name="image" class="form-control" placeholder="Post Title">
                        @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                   @enderror
                </div>
                <br>
                <button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
            </div>
            <div class="col"></div>
        </div>
    </form>
</div>
@endsection
