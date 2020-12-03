<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"  href="{{asset('css/home.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">

    <title>Add Pizza</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: red;">
    <a class="navbar-brand" href="#">PHizza Hut</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <a class="nav-link font-weight-bold" href="#">Login</a>
            <a class="nav-link font-weight-bold" href="#">Register</a>

        </div>
    </div>
</nav>
<div class="backgroundorder">
    <p class="nama1">Our Freshly made Pizza</p>
    <hr class="warnagaris">
    <p class="nama2">Order it now !</p>
    <form class="form-inline md-form mr-auto mb-4 justify-content-center">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warning btn-rounded btn-sm my-0" type="submit">Search</button>
    </form>
    <div class="form-row">
        <div class="col">
            <div>
                <p>Welcome to Phizaa Hut</p>
                <h5>Phizza</h5>

            </div>
{{--            @foreach($Pizza1->chunk(2) as $pizzaasli)--}}
{{--                <div class="row mt-5 mx-5 d-flex justify-content-center">--}}
{{--                @foreach($pizzaasli as $pizzapersatu)--}}
{{--                    <div class="col-2 py-2 px-0 mx-1 text-center">--}}
{{--                        <a href="/order/{{$pizzapersatu->id}}"></a>--}}

{{--                        @endforeach--}}
{{--                        @endforeach--}}



                    </div>
                </div>

        </div>
    </div>


</div>
