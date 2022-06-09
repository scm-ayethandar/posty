<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posty</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-secondary">
    <ul class="nav bg-light mb-2 justify-content-between">
        <div class="ms-5 d-flex">
        <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts') }}">Post</a>
            </li>
        </div>
        <div class="d-flex me-5">

        @auth
            <li class="nav-item">
                <a class="nav-link" href="#">{{ auth()->user()->name }}</a>
            </li>
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-secondary" href="{{ route('logout') }}">Logout</button>
                </form>
          </li>
        @endauth

        @guest
            <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
        @endguest
        </div>    
    </ul>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    @yield('content')
</body>
</html>