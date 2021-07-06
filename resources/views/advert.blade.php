<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="{{ url('css/media.css') }}">
    <script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <title>advertise with us</title>
    <style>
         .designTypeList{
             padding: 0.5rem;
             cursor: pointer;
         }
         .designTypeList:hover{
             padding: 0.7rem;
         }
         #ADemail{
             padding: 2rem;
         }
         #designEmail{
             padding: 2rem;
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
            <h3 id="wel-h3">Welcome To Our Advert Landing Page!</h3>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-12 col-lg-10 border p-2 text-center text-white" style="background: rgb(139, 182, 171);">
            <h4 class="h4text">Upload Your Design Content And Publish</h4>
        </div>
        <div class="col-lg-2 d-none d-lg-flex border p-2 justify-content-end">
            <button class="btn btn-secondary border-0">Publish</button>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-12 col-lg-8">
            <form action="" name="formContent" method="GET">
                <input type="file" name="imageAD" class="form-control">
                <br>
                <input type="email" name="ADemail" id="ADemail" class="form-control" placeholder="Enter Your Email:">
                <br>
                <textarea name="ADtext" id="article-ckeditor" cols="30" rows="10" class="form-control" placeholder="Enter Content Description:"></textarea>
                <br>
                <button type="submit" name="ADsubmit" class="btn btn-secondary text-center text-white border-0 d-lg-none">Publish</button>
            </form>
        </div>
        <div class="col-lg-4 d-none d-lg-block bg-light text-center border border-top-0 border-right-0 border-bottom-0">
            dddvagfxtvf dddvagfxtvf dddvagfxtvf dddvagfxtvf
            dddvagfxtvf dddvagfxtvf dddvagfxtvf dddvagfxtvf
            dddvagfxtvf dddvagfxtvf dddvagfxtvf dddvagfxtvf
        </div>
    </div>
    <br>
    <hr>
    <br>
    <div class="row">
        <div class="col-12 border text-white text-center p-2" style="background: rgb(139, 182, 171);">
            <h4>Looking for a Designer for your Products Advert</h4>
        </div>
        <div class="col-12 col-lg-7 bg-light" style="padding-top: 1rem;">
            <p>vdgdvgcgcg vdgdvgcgcg vdgdvgcgcg
                vdgdvgcgcg vdgdvgcgcg vdgdvgcgcg
                vdgdvgcgcg vdgdvgcgcg vdgdvgcgcg
            </p>
            <hr>
            <form action="">
                <input type="email" name="designEmail" class="form-control" id="designEmail" placeholder="Enter Your Email:">
                <br>
                <h5 class="text-center" style="font-family: monospace;">Select Your Design type here:</h5>
                <ul style="list-style-type: none">
                    <li class="designTypeList">
                        <input type="checkbox" name="Arts" id="">
                        Arts
                    </li>
                    <li class="designTypeList">
                        <input type="checkbox" name="Novel" id="">
                        Novel Cover
                    </li>
                    <li class="designTypeList">
                        <input type="checkbox" name="Complimentry" id="">
                        Complimentry Cards
                    </li>
                    <li class="designTypeList">
                        <input type="checkbox" name="Logo" id="">
                        Logo
                    </li>
                    <li class="designTypeList">
                        <input type="checkbox" name="Banner" id="">
                        Banner
                    </li>
                    <li class="designTypeList">
                        <input type="checkbox" name="Poster" id="">
                        Poster
                    </li>
                    <li class="designTypeList">
                        <input type="checkbox" name="WebSite" id="">
                        WebSite Banner
                    </li>
                </ul>
                <button type="submit" class="btn btn-success border-0 text-center">
                    <i class="fas fa-paper-plane"></i>
                    Send Request
                </button>
            </form>
        </div>
        <div class="col-5 d-none d-lg-block"></div>
    </div>

    
    <br><br><br>
    @include('layouts.footer')

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>   
</body>
</html>