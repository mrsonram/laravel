@extends('manage/theme')
@section('title', 'Create')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Create New Pets</h1>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('/index') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        @include("manage/form")

                        <div class="col-6">
                            <button type="submit" class="btn btn-success">Create</button>
                            <a href="{{ url('/') }}/index" class="btn btn-secondary">Cancel</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
@endsection
