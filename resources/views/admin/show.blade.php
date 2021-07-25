<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<head>
    <title>{{ $animal->animal_name }}</title>
</head>

<div class="container">

<h1>ID : {{ $animal->animal_id }}</h1>
<div>
	<strong>name : </strong>
	<span>{{ $animal->animal_name }} </span>
</div>
<div>
	<strong>type : </strong>
	<span>{{ $animal->animal_type }}</span>
</div>
<div>
	<strong>species : </strong>
	<span>{{ $animal->animal_species }}</span>
</div>
<div>
	<strong>marking : </strong>
	<span>{{ $animal->animal_marking }}</span>
</div>
<div>
	<strong>collar : </strong>
	<span>{{ $animal->animal_collar }}</span>
</div>
<div>
	<strong>age : </strong>
	<span>{{ $animal->animal_age }}</span>
</div>
<div>
	<strong>status : </strong>
	<span>{{ $animal->animal_status }}</span>
</div>
<div>
	<strong>vet : </strong>
	<span>{{ $animal->animal_vet }}</span>
</div>
<div>
	<strong>owner : </strong>
	<span>{{ $animal->owner }}</span>
</div>
<div>
	<strong>pictures : </strong>
	<span>{{ $animal->pictures }}</span>
</div>
	<a href="{{ url('/') }}/manage">back to employee</a>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

