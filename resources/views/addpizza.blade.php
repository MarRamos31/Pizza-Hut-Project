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


<div class="form-row align-text-left">
    <strong>
    <p class="addpizzaname">Add New Pizza</p>
    </strong>

</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/addnewpizza" method="post" enctype="multipart/form-data">
    @csrf
    <div class="d-flex justify-content-center backgroundorder">
        <div class="mt-5 col-4">
            <div class="form-group">
                <div class="row">
                    <div class="col-4">
                        <label for="formGroupExampleInput">Pizza Name</label>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="pizzanamenew" name="pizzanameadd">
                    </div>
                </div>

            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-4">
                        <label for="formGroupExampleInput">Pizza Price</label>
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" id="pizzapricenew" name="pizzapriceadd">
                    </div>
                </div>

            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-4">
                        <label for="formGroupExampleInput">Pizza Desc</label>
                    </div>
                    <div class="col-1">
                        <textarea id="pizzadescnew" name="Desc"rows="4" cols="50" ></textarea>
                    </div>
                </div>


            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="exampleGroupExampleInput">Pizza Image</label>
                    </div>
                    <div class="col">
                        <input type="file" class="form-control-file" id="imagepizzanew" name="pizzaimageadd">
                    </div>
                </div>

            </div>
            <div class="form-group form-row justify-content-center">
                <button type="submit" name="buttonadd" class="btn btn-primary">Add Pizza</button>
            </div>
        </div>
    </div>
</form>
