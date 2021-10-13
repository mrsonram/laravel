@extends('theme/mdb')
@section('title', 'ข่าวสาร (สำหรับผู้ดูแลระบบ)')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="d-grid gap-2">
                    <a class="btn btn-outline-dark btn-lg" data-mdb-ripple-color="dark" href="{{ url('/') }}/home"><i
                            class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="col-10">
                <nav class="navbar navbar-light bg-white">
                    <div class="container">
                        <a class="btn btn-dark px-3" href="{{ url('/') }}/message/create" role="button">
                            <i class="fas fa-plus-circle fa-lg"></i>
                        </a>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                        <form class="d-flex" action="{{ url('/') }}/message" method="GET">
                            <input name="search" class="form-control rounded" type="search" placeholder="ค้นหา"
                                aria-label="Search" value="{{ $search }}">
                            <span class="input-group-text border-0" id="search-addon">
                                <i class="fas fa-search"></i>
                            </span>
                        </form>
                    </div>
                </nav>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">เรื่อง</th>
                            <th scope="col">เรื่องย่อย</th>
                            <th scope="col">รายละเอียด</th>
                            <th scope="col">จัดการ</th>
                        </tr>
                    </thead>
                    @foreach ($news as $news)
                        <tr>
                            <td scope="col">{{ isset($news->title) ? $news->title : 'ไม่มีข้อมูล' }}</td>
                            <td scope="col">{{ isset($news->subtitle) ? $news->subtitle : 'ไม่มีข้อมูล' }}</td>
                            <td scope="col">{{ isset($news->detail) ? $news->detail : 'ไม่มีข้อมูล' }}</td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <a class="btn btn-outline-info" data-mdb-ripple-color="dark"
                                        href="{{ url('/') }}/message/{{ $news->id }}"><i
                                            class="fas fa-info"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
