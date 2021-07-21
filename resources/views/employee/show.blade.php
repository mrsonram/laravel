<!DOCTYPE html>
<span style="font-family: Google Sans">
<head>
    <title>{{ $employee->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<h1>Employee : {{ $employee->employee_id }}</h1>
<div>
	<strong>name : </strong>
	<span>{{ $employee->name }} </span>
</div>
<div>
	<strong>age : </strong>
	<span>{{ $employee->age }}</span>
</div>
<div>
	<strong>address : </strong>
	<span>{{ $employee->address }}</span>
</div>
<div>
	<strong>salary : </strong>
	<span>{{ $employee->salary }}</span>
</div>
<div>
	<strong>position_id : </strong>
	<span>{{ $employee->position_id }}</span>
</div>
<div>
	<strong>position_name : </strong>
	<span>{{ $employee->position->position_name }}</span>
</div>
	<a href="{{ url('/') }}/employee">back to employee</a>
</div>
