<!DOCTYPE html>
<head>
    <span style="font-family: Google Sans">
    <title>{{ $animals->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Edit Details</h1>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('/') }}/home/{{ $animals->id }}">

                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            @include("manage/form")
                        <div class="col-6">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="{{ url('/') }}/home" class="btn btn-secondary">Cancel</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
        <script>
            document.querySelector("#inputgender").value = "{{ isset($animals->gender) ? $animals->gender : '' }}";
        </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
