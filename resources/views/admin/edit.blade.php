<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
    <h1>Edit Pet</h1>
    <a href="{{ url('/') }}/manage">กลับ</a>
    <form method="POST" action="{{ url('/') }}/manage/{{ $animals->id }}">

	    {{ csrf_field() }}
	    {{ method_field('PUT') }}

        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                @include("admin/form")
                <br>
                <button type="submit" class="btn btn-primary">อัพเดต</button>
            </div>
            <div class="col"></div>
          </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

