
@include('layouts.header')

<div class="row bg-light border border-left-0 border-right-0">
    <div class="col offset-1 pt-2 pb-1 d-none d-md-block" style="background: rgb(139, 182, 171);" id="drop-down">
        <div class="row" style="cursor: pointer;">
            <div class="col-2">
                <i class="fas fa-bars" style="font-size: 30px; color: white;"></i>
            </div>
            <div class="col-8">
               <p style="font-weight: bold; font-size: 1.2rem; color: white;">Browse Categories </p>
            </div>
        </div>
        <div class="row bg-light w-100" id="cate-dropdown" style="display: none; position: absolute; margin-top: 1%; box-shadow: 2px 7px 28px #d1cfcf;">
            <ul style="list-style-type: none; margin-left: -6%;">
                <a href="{{ url('') }}">
                    <li>All Products</li>
                </a>
                <li>Shoes</li>
                <li>Slippers</li>
            </ul>
        </div>
    </div>

    <div class="col pt-md-2 pb-md-1 text-white text-center border border-right-0 border-top-0 border-bottom-0" style="background: rgb(139, 182, 171); font-weight: bold;">
        <a href="{{ url('advert') }}" id="a">
            <p>Advertisement</p>
        </a>
    </div>
    <div class="col">ddd</div>
    <div class="col">ddd</div>
</div>
<div class="container-fluid">
    <img src="{{ asset('storage/banner.jpg') }}" class="img-fluid w-100">
    <br><br>
    <P class="text-center" style="color:rgb(193, 196, 195);">
        STILLSHOP COLLECTIONS
    </P>
    <h2 class="h4 lg-h1 text-center" style="margin-top: -1%;">
        FEATURED CATEGORIES
    </h2>
</div>
<hr>

@include('layouts.footer')