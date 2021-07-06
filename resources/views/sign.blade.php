<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
        <link rel="stylesheet" href="{{ url('css/media.css') }}">
        <title>register</title>
        <style>
           #welcome{
               font-size: 1.5rem;
               font-weight: bold;
               font-family: 'Courier New', Courier, monospace;
           }
           .mainform{
            width: 100%;
           }
        </style>
    </head>
    <body class="container-fluid bg-light">
        <div class="row">
            <div class="col-4 col-lg-2 p-2">
                <a href="{{ url('') }}">
                <img src="{{ asset('storage/logomeout.png') }}" class="img-fluid w-75">
                </a>
            </div>
            <div class="col-8 col-lg-10 bg-dark text-white p-1 p-lg-2">
                <h3 id="wel-h3">Welcome To StillShop Web!</h3>
            </div>
        </div>
        <br><br class="d-none d-lg-block">
        <div class="row p-0 m-1 m-md-0 pb-5 p-md-5">
            <div class="col-4 border border-left-0 border-top-0 border-bottom-0 d-none d-lg-block text-center">
                <i class="fas fa-user fa-9x"></i>
                <p id="welcome">Welcome!</p>
                <div>
                    hhhhhhhhjdb hhhhhhhhjdb hhhhhhhhjdb hhhhhhhhjdb
                    hhhhhhhhjdb hhhhhhhhjdb hhhhhhhhjdb hhhhhhhhjdb
                    hhhhhhhhjdb hhhhhhhhjdb hhhhhhhhjdb hhhhhhhhjdb
                    hhhhhhhhjdb hhhhhhhhjdb hhhhhhhhjdb hhhhhhhhjdb
                    hhhhhhhhjdb hhhhhhhhjdb hhhhhhhhjdb hhhhhhhhjdb
                    hhhhhhhhjdb hhhhhhhhjdb hhhhhhhhjdb hhhhhhhhjdb
                    hhhhhhhhjdb hhhhhhhhjdb hhhhhhhhjdb hhhhhhhhjdb
                    hhhhhhhhjdb hhhhhhhhjdb hhhhhhhhjdb hhhhhhhhjdb
                    hhhhhhhhjdb hhhhhhhhjdb hhhhhhhhjdb hhhhhhhhjdb
                    hhhhhhhhjdb hhhhhhhhjdb hhhhhhhhjdb hhhhhhhhjdb
                    hhhhhhhhjdb hhhhhhhhjdb hhhhhhhhjdb hhhhhhhhjdb
                    hhhhhhhhjdb hhhhhhhhjdb hhhhhhhhjdb hhhhhhhhjdb
                </div>
            </div>
            <div class="col-12 col-lg-5 p-1 p-md-3">

                @include('errors.error')

                {!! Form::open(['url' => "{{ url('sign') }}", 'method' => 'POST', 'class' => 'container'])  !!}
                
                <div class="form-group">
                    {{ Form::label('FirstName', 'FirstName') }}
                    {{ Form::text('FirstName', '', ['class' => 'form-control', 'placeholder' => 'FirstName']) }}
                </div>
                
                <div class="form-group">
                    {{ Form::label('surname', 'SurName') }}
                    {{ Form::text('SurName', '', ['class' => 'form-control', 'placeholder' => 'SurName']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('email', 'Email') }}
                    {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'email']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('password', 'Password') }}
                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('country', 'country') }}
                    {{ Form::text('country', '', ['class' => 'form-control', 'placeholder' => 'country']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('number', 'Phone') }}
                    {{ Form::number('number', '', ['class' => 'form-control', 'placeholder' => 'Phone']) }}
                </div>

                <div class="form-group">
                    {!! Form::submit('Submit', ['class' => 'btn btn-success w-100 p-2']) !!}
                </div>

                {!! Form::close() !!}
            </div>
            <div class="col-lg-3 border border-right-0 border-top-0 border-bottom-0 d-none d-lg-block">
                
            </div>
        </div>

        @include('layouts.footer')

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>