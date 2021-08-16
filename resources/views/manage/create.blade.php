<head>
    <span style="font-family: Google Sans">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Create New Pets</h1>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('/index') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        @include("manage/form")

                        <div class="col-6">
                            <button type="submit" class="btn btn-success">Create</button>
                            <a href="{{ url('/') }}/index" class="btn btn-secondary">Cancel</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
