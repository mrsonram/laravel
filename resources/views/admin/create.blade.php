@extends('admin/theme')
@section('content')
<div class="container">
    <h1>Create New Pet</h1>
    <a href="{{ url('/') }}/manage">back</a>
    <form action="{{ url('/') }}/manage" method="POST">

        {{ csrf_field() }}
        {{ method_field('POST') }}

        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                @include("admin/form")
                <br>
                <button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
            </div>
            <div class="col"></div>
        </div>
    </form>
</div>
@endsection
