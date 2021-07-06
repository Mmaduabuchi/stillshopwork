<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>footer</title>
    <style>
        span{
            color: aliceblue;
            font-weight: bold;
            margin-left: 2%;
            cursor: pointer;
        }
        span :hover{
            color: rgb(107, 157, 177);
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="row bg-dark text-center">
        <footer class="col p-0 p-md-5">
            <a href="{{ url('about') }}">
                <span>About</span>
            </a>
            <a href="{{ url('contact') }}">
                <span>Contact</span>
            </a>
            <a href="{{ url('terms') }}">
                <span>Terms & condiction</span>
            </a>
            <a href="{{ url('advert') }}">
                <span>Advert</span>
            </a>
            <a href="{{ url('log') }}">
                <span>sign in</span>
            </a>
            <a href="{{ url('sign') }}">
                <span>sign up</span>
            </a>
        </footer>

    </div>
</body>
</html>