@extends('theme/mdb')
@section('title')
    {{ $news->title }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="d-grid gap-2">
                <a class="btn btn-outline-dark btn-lg" data-mdb-ripple-color="dark" href="{{ url('/') }}/message"><i class="fas fa-arrow-left"></i></a>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <strong>รายละเอียด</strong>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <strong>เรื่อง : </strong>
                                {{ isset($news->title) ? $news->title : 'ไม่มีข้อมูล' }}
                            </p>
                            <p class="card-text">
                                <strong>หัวข้อย่อย : </strong>
                                {{ isset($news->subtitle) ? $news->subtitle : 'ไม่มีข้อมูล' }}
                            </p>
                            <p class="card-text">
                                <strong>รายละเอียด : </strong>
                                {{ isset($news->detail) ? $news->detail : 'ไม่มีข้อมูล' }}
                            </p>

                            <a class="btn btn-warning btn-lg" data-mdb-ripple-color="dark" href="{{ url('/') }}/message/{{ $news->id }}/edit">แก้ไข</a>
                            <form action="{{ url('/') }}/message/{{ $news->id }}" method="POST" onsubmit="validate();" style="display:inline">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger btn-lg" data-mdb-ripple-color="dark" type="submit">ลบ</button>
                            </form>
                        </div>
                        <script>
                            function validate()
                            {
                                //SUBMIT
                                var wantToDelete= confirm('Are you sure to delete this item?');
                                if(wantToDelete)
                                    {
                                        this.submit();
                                    }
                                else
                                    {
                                        this.close();
                                    }
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
