<!DOCTYPE html>
<head>
    <span style="font-family: Google Sans">
    <title>{{ $animals->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header text-center h3">{{ $animals->name }} (ID : {{ $animals->id }})</div>
                    <img src="{{ asset($animals->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">เพศ : {{ $animals->gender }}</p>
                        <a href="{{ url('/') }}/index" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
            <div class="col"></div>
          </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
