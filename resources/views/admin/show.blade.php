<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<head>
    <title>{{ $animals->name }}</title>
</head>

<div class="container">

<h1>ID : {{ $animals->id }}</h1>
<div>
	<strong>ชื่อ : </strong>
	<span>{{ $animals->name }}</span>
</div>
<div>
	<strong>ประเภท : </strong>
	<span>{{ $animals->type }}</span>
</div>
<div>
	<strong>พันธุ์ : </strong>
	<span>{{ $animals->species }}</span>
</div>
<div>
	<strong>ลาย : </strong>
	<span>{{ $animals->marking }}</span>
</div>
<div>
	<strong>เพศ : </strong>
	<span>{{ $animals->gender }}</span>
</div>
<div>
	<strong>ปลอกคอสี : </strong>
	<span>{{ $animals->collar }}</span>
</div>
<div>
	<strong>อายุ : </strong>
	<span>{{ $animals->age }}</span>
</div>
<div>
	<strong>สถานะ : </strong>
	<span>{{ $animals->status }}</span>
</div>
<div>
	<strong>สถานะทำหมัน : </strong>
	<span>{{ $animals->vet }}</span>
</div>
<div>
	<strong>เจ้าของ : </strong>
	<span>{{ $animals->owner }}</span>
</div>
<div>
	<strong>รูป : </strong>
	<span>{{ $animals->pictures }}</span>
</div>
	<a href="{{ url('/') }}/manage">กลับ</a>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

