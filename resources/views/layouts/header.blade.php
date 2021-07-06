<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">  
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script src="{{ asset('js/function.js') }}" defer></script>
        <title>stillshop.com</title>
        <style>
            #sm-menu-holder{
                display: none;
            }
            #a{
                text-decoration: none;
                color: white;
            }
            #a:hover{
                color:rgb(228, 239, 248);
            }
            a{
                text-decoration: none;
                color: black;
            }
        </style>
    </head>
    <body class="container-fluid">
        <div class="row p-1">
            <div class="col-lg-2 col-8 order-6">
                <img src="{{ asset('storage/logomeout.png') }}" class="img-fluid w-75">
            </div>
            <div class="col-lg-6 order-12 order-md-8">
                <form action="" class="row">
                    <input type="text" name="search" class="col-9 col-lg-7 form-control" placeholder="Search Products">
                    <select name="select-item" id="" class="col-lg-4 form-control d-none d-md-block">
                        <option value="all">All Products</option>
                        <option value="slippers">Slippers</option>
                        <option value="shoes">Shoes</option>
                    </select>
                    <button type="submit" class="col-2 col-lg-1 form-control">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <div class="col-lg-2 order-10 d-none d-md-block">
                <a href="{{ url('log') }}">
                    <button class="btn btn-primary border-0 offset-2">Sign in</button>
                </a>
                <a href="{{ url('sign') }}">
                    <button class="btn btn-primary border-0">Sign up</button>
                </a>
            </div>
            <div class="col-lg-2 col-4 order-8 order-md-12 text-end text-md-center">
                <a href="{{ url('') }}">
                    <i class="fas fa-sync fa-1x ml-2"></i>
                </a>
                <a href="#" data-toggle="modal" data-target="#myModal">
                    <i class="fas fa-cart-arrow-down fa-1x ml-3"></i>
                </a>
            </div>
        </div>
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>cart</h4>
                    </div>
                    <div class="modal-body">
                        <p>all added products display here</p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-dark" data-dismiss='modal' value="close">
                        <input type="button" class="btn btn-primary" value="check out">
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-lg-none d-md-none">
            <i class="fas fa-bars fa-2x ml-2" id="dropDownMenuIcon"></i>
        </div>
        <br>
        <div class="row d-md-none d-lg-none mb-2 bg-dark text-white" id="sm-menu-holder">
            <div class="col-12 border border-top-0 border-left-0 border-right-0 p-2 d-flex justify-content-end">
                <i class="fas fa-times fa-1x" id="remover-icon"></i>
            </div>
            <div class="col-12 border border-top-0 border-left-0 border-right-0 p-2">All Products</div>
            <div class="col-12 border border-top-0 border-left-0 border-right-0 p-2">Slippers</div>
            <div class="col-12 border border-top-0 border-left-0 border-right-0 p-2">Shoes</div>
            <a href="{{ url('log') }}">
                <div class="col-12 border border-top-0 border-left-0 border-right-0 p-2 text-white">Sign in</div>
            </a>
            <a href="{{ url('sign') }}">
                <div class="col-12 border-0 p-2 text-white">Sign up</div>
            </a>
        </div>
            

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    </body>
</html>
