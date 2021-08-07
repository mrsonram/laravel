<!DOCTYPE html>
<span style="font-family: Google Sans">
<head>
    <title>{{ $animals->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<h1>Pets : {{ $animals->id }}</h1>
<div>
	<strong>name : </strong>
	<span>{{ $animals->name }} </span>
</div>
<div>
	<strong>type : </strong>
	<span>{{ $animals->type }}</span>
</div>
<div>
	<strong>gender : </strong>
	<span>{{ $animals->gender }}</span>
</div>
	<a href="{{ url('/') }}/home">back to employee</a>
</div>
