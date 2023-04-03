<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    @yield('css')
    <title>Squre</title>
</head>
<body style="background-color: rgb(29, 29, 29);">
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Square</a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="row" style="width: 100%;">
                <div class="col-xl-6">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-6">
                    <ul class="navbar-nav" style="display: flex; justify-content: right;">
                        <li class="nav-item">
                            <a class="nav-link" href="login">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </nav>
    <div class="containter-xl-fluid">
        @yield('content')
    </div>
    


    <script src="{{asset('js/jquery-3.6.4.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
    @yield('js')
</body>
</html>