<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="portfolio/assets/icon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="portfolio/css/styles.css" rel="stylesheet" />
    </head>
    <style>
        @font-face {
          font-family: FontNongnam;
          src: url(fonts/FONTNONGNAM.TTF);
        }

        div, h1, h2, h3, h4, h5, h6 {
          font-family: FontNongnam;
        }

        .card-img-top {
        width: 100%;
        height: 16vw;
        object-fit: cover;
        }

        .card-img {
            width: 100%;
            height: 20vw;
            object-fit: cover;
        }
    </style>

    <body>
        @yield('content')
        @include('pet/footer')
        @include('pet/basic')
        @include('pet/news/modal')
        @include('pet/contact')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="portfolio/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <script>
            function show(id) {
                $.get("{{ url('pet/show') }}/" + id, {}, function(data, status) {
                    $("#modal-title").html('รายละเอียด')
                    $("#page").html(data);
                    $("#modal").modal('show');
                });
            }

            function message(id) {
                $.get("{{ url('news/show') }}/" + id, {}, function(data, status) {
                    $("#modal-title").html('รายละเอียด')
                    $("#page").html(data);
                    $("#modal").modal('show');
                });
            }
        </script>
    </body>
</html>
