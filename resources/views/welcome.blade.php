<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vida_Digital</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                @if (Route::has('login'))
                <div class="navbar-nav">
                    @auth
                    <a href="{{ url('/home') }}" class="nav-link" style="color:white;">Home</a>
                    @else
                    <a href="{{ route('login') }}" class="nav-link " style="color:white;">Log in</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="nav-link " style="color:white;">Register</a>
                    @endif
                    @endauth
                </div>
                @endif




            </div>
        </div>
    </nav>
    <div style="margin-top: 100px; text-align: center;">
        <h1>C H A L L E N G E</h1>
        <h1 class="text-primary ">V I D A _ D I G I T A L</h1>
    </div>
    <div style="margin-top: 20px; text-align: center;">
        <img src="https://media-exp1.licdn.com/dms/image/C4E0BAQF2Kbnbz257Lw/company-logo_200_200/0/1553090134704?e=1678924800&v=beta&t=mOQkgqT0GJYGaMv1iV2d-5ayxj27qoc7ZSlaoUaTmQc" alt="vida_digital" class="img-responsive" style="width:200px; height:200px;" />

    </div>





    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>