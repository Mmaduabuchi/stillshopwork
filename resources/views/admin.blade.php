<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
        <script src="{{ asset('js/admin.js') }}" defer></script>
        <script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
        <title>dashboard</title>
        <style>
            .div{
                background: rgb(216, 250, 207);
                text-align: center;
                cursor: pointer;
            }
            .div2{
                background: rgb(210, 242, 248);
                text-align: center;
                cursor: pointer;
            }
            .div3{
                background: rgb(250, 253, 198);
                text-align: center;
                cursor: pointer;
            }
            .ptag{
                font-weight: bold;
                font-size: 1.2rem;
            }
            a{
                text-decoration: none;
                color: black;
            }
            /* #formproduct{
                box-shadow: 2px 2px 10px 3px #ddd;
            } */
            #pro-ul{
                list-style-type: none;
                padding: 0rem;
                margin: 0%
            }
            .li{
                padding: 0.5rem;
                font-size: 1.2rem;
                font-weight: bold;
            }
            .li:hover{
                background: rgb(146, 144, 144);
                color:rgb(210, 242, 248);
                padding: 1.4rem;
                border-left: 4px solid rgb(167, 229, 240);
            }
            .uploader-container{
                display: none;
            }
            #ul-C-products{
                list-style-type: none;
                margin: 0%;
                padding: 0rem
            }
            .C-list{
                padding: 0.5rem;
                font-size: 1.3rem;
                font-weight: bold;
            }
            .C-list:hover{
                padding: 0.7rem;
                cursor: pointer;
            }
            #ChooseProductsType{
                font-size: 1.3rem;
                font-family: cursive;
                font-weight: bold;
            }
            #UploadYourProductsHere{
                font-size: 1.3rem;
                font-weight: bold;
                font-family: 'Courier New', Courier, monospace;
            }
            .pp{
                padding: 2rem;
            }
        </style>
    </head>
    <body class="container-fluid bg-gray">
        <div class="row bg-light">
            <div class="col-lg-2 p-2">
                <a href="{{ url('') }}">
                <img src="{{ asset('storage/logomeout.png') }}" class="img-fluid w-75">
                </a>
            </div>
            <div class="col-lg-7 bg-dark text-white p-2">
                <h2>DashBoard</h2>
            </div>
            <div class="col-lg-1 bg-dark text-white p-2">
                <i class="fas fa-user fa-2x"></i>
            </div>
            <div class="col-lg-2 bg-dark text-white p-2">
                <p>Admin: Emmanuel Pinnacle</p>
            </div>
        </div>
        <br><br>
        <hr>
        <br><br>
        <div class="row mt-3">
            <div class="col ml-3 p-3 div">
                {{-- <a href="{{ url('') }}"> --}}
                    <i class="fas fa-cart-arrow-down fa-3x"></i>
                    <p class="ptag">Orders</p>
                {{-- </a> --}}
            </div>
            <div class="col ml-3 p-3 div2">
                <i class="fas fa-user fa-3x"></i>
                <p class="ptag">Users</p>
            </div>
            <div class="col ml-3 p-3 div3">
                <a href="#" data-toggle="modal" data-target="#productsModal">
                <i class="fas fa-list fa-3x"></i>
                <p class="ptag">All Products</p>
                </a>
            </div>
            <div class="col ml-3 p-3 div2 divUploder">
                <i class="fas fa-upload fa-3x"></i>
                <p class="ptag">Upload Products</p>
            </div>
            <div class="col ml-3 mr-3 p-3 div">
                <i class="fas fa-cog fa-3x fa-spin"></i>
                <p class="ptag">Settings</p>
            </div>
        </div>
        <div class="modal fade" id="productsModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Choose Products Categories</h4>
                    </div>
                    <div class="modal-body">
                        <ul id="pro-ul">
                            <li class="li">
                                <input type="radio" name="Products" value="all">
                                All Products
                            </li>
                            <li class="li">
                                <input type="radio" name="Products" value="slippers">
                                Slippers
                            </li>
                            <li class="li">
                                <input type="radio" name="Products" value="shoes">
                                Shoes
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">close</button>
                        <button type="button" class="btn btn-primary">Search Products</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 ml-2 mr-2 mainAdminDiv">
            <div class="col-12 col-lg-7 border p-3">
                <div class="row">
                    <div class="col-8 border border-right-0 bg-light p-1">
                        <h3>Users:</h3>
                    </div>
                    <div class="col-4 border border-left-0 bg-light p-1 d-flex justify-content-end">
                        <button class="btn btn-success">Check</button>
                    </div>
                </div>
                <div class="row border p-3 mt-3">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>FirstName</th>
                                <th>SurName</th>
                                <th>Email</th>
                                <th>Number</th>
                                <th>Country</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->firstName }}</td>
                                    <td>{{ $user->surName }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->number }}</td>
                                    <td>{{ $user->country }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 col-lg-5 border p-3">
                <div class="row border bg-light p-1">
                    <h3>All Products Items:</h3>
                </div>
                <div class="row border p-3 mt-3">
                    dd
                </div>
            </div>
        </div>
        <br>
        <div class="row border m-2 uploader-container">
            <div class="col-12 p-2 bg-secondary text-center text-white">
                <p id="UploadYourProductsHere">Upload your products here!</p>
            </div>
            <div class="row">
                <div class="m-3 col-6 border border-left-0 border-top-0 border-bottom-0" id="formproduct">
                    <form action="" method="POST" name="form" class="form-group pr-3">
                        <input type="file" class="form-control m-3 " name="productImage">
                        <input type="text" class="form-control m-3  pp" name="productPrice" placeholder="Enter Product Price:">
                        <input type="text" class="form-control m-3  pp" name="productName" placeholder="Enter Product Name:">
                        <textarea name="ADtext" id="article-ckeditor" cols="30" rows="10" class="form-control" placeholder="Enter Content Description:"></textarea>
                        <button class="btn btn-success m-3 p-2">Upload</button>
                    </form>
                </div>
                <div class="col-4 m-3">
                    <div class="col p-3 text-center">
                        <p id="ChooseProductsType">Choose Products Type:</p>
                    </div>
                    <ul id="ul-C-products">
                        <li class="C-list">
                            <input type="checkbox" name="productsChoose" value="all-pro-C">
                            All Products
                        </li>
                        <li class="C-list">
                            <input type="checkbox" name="productsChoose" value="slippers-pro-C">
                            Slippers
                        </li>
                        <li class="C-list">
                            <input type="checkbox" name="productsChoose" value="shoes-pro-C">
                            Shoes
                        </li>
                    </ul>
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button class="btn btn-dark m-2 closeBtn">Close</button>
                </div>
            </div>
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