@extends('manage/theme')
@section('title', 'Home')
@section('content')
    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand h1">Pets List</a>
            <form>
                <a class="btn btn-secondary" href="{{ url('/') }}/index/create">Create</a>
            </form>
        </div>
    </nav>

    <!-- Content -->
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ชื่อ</th>
                    <th>เพศ</th>
                    <th>รูปภาพ</th>
                    <th>ตัวเลือก</th>
                </tr>
                </thead>
                <tbody>
                @foreach($animals as $animals)
                <tr>
                    <td>{{ $animals->name }} </td>
                    <td>{{ $animals->gender }}</td>
                    <td><img src="{{ asset($animals->image) }}" height="120" width="160" alt=""></td>
                    <td>
                        <a class="btn btn-primary" href="{{ url('/') }}/index/{{ $animals->id }}">View</a>
                        <a class="btn btn-warning" href="{{ url('/') }}/index/{{ $animals->id }}/edit">Edit</a>
                        <form action="{{ url('/') }}/index/{{ $animals->id }}" method="POST" onsubmit="validate();" style="display:inline">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>

                </tr>
                @endforeach
          </table>
    </div>
@endsection
