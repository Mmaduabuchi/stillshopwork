<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="{{ url('css/media.css') }}">
    <title>log in</title>
    <style>
        a{
            text-decoration: none;
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body class="container-fluid">
    <div class="row">
        <div class="col-4 col-lg-2 p-2">
            <a href="{{ url('') }}">
            <img src="{{ asset('storage/logomeout.png') }}" class="img-fluid w-75">
            </a>
        </div>
        <div class="col-8 col-lg-10 bg-dark text-white p-2">
            <h3 id="wel-h3">Welcome Back Again!</h3>
        </div>
    </div>
    <br><br><br>
    <div class="row m-1 m-lg-5">
        <div class="col p-2 bg-light">
            <div class="col-lg-8 mt-1 mt-lg-5 offset-0 offset-lg-2 text-center">
                <i class="fas fa-user fa-8x"></i>
                <br>
                <h4 id="wel-h3">LOG INTO YOUR ACCOUNT</h4>
            </div>
        </div>
        <div class="col border border-right-0 border-top-0 border-bottom-0 bg-light">
            <form class="mt-3" action="" method="post" name="form">
                <input type="email" name="email" placeholder="Email." class="form-control p-4 mb-3 w-100 w-lg-75" required>
                <br>
                <input type="password" name="password" placeholder="**********" class="form-control p-4 mb-3 w-100 w-lg-75" required>
                <br>
                <input type="submit" name="submit" value="Sign In" class="w-100 w-lg-75 bg-primary text-center p-3 border-0 text-light text-bolder">  
                <br>
            </form>
            <a href="{{ url('') }}">
                <button class="btn btn-primary">Forgot Password</button>
            </a>
            <br><br>
        </div>
    </div>

    <br><br><br><br>

    @include('layouts.footer')
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>