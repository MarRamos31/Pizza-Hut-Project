<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <link rel="home.css" type="text/css" href="{{asset('css/bootstrap.css')}}">

    <title>PHizza Hut Register</title>
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
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/registernew" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-row justify-content-center">
        <div class="form-group col-md-6 ">
            <label for="inputEmail4">Username</label>
            <input type="text" class="form-control" id="usernameinput">
        </div>

    </div>
    <div class="form-row justify-content-center">
        <div class="form-group col-md-6 ">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>

    </div>

    </div>
    <div class="form-row justify-content-center">
        <div class="form-group col-md-6 ">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4">
        </div>
    </div>
    <div>
        <div class="form-row justify-content-center">
            <div class="form-group col-md-6 ">
                <label for="inputPassword4">Confrim Password</label>
                <input type="password" class="form-control" id="confirmpassword">
            </div>
    </div>

<div class="form-row justify-content-center ">

        <div class=" form-row justify-content-center ">

        <label for="inputAddress">Phone Number</label>
        <input type="text" class="form-control" id="phonenumber" placeholder="+62" name="phonenumber">

        </div>
</div>
        <div >
        <div class="form-group form-row justify-content-center">
        <label for="inputAddress2">Adress</label>
        <input type="text" class="form-control" id="adress" placeholder="Jl." name="adress">
        </div>
        <div class="form-row justify-content-center">
        <fieldset class="form-group ">
            <div class="row">
                <legend class="col-form-label col-4 pt-0">Gender</legend>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                        <label class="form-check-label" for="gridRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Female
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        </div>

{{--    <div class="form-row justify-content-center">--}}
{{--        <div class="form-group col-md-6">--}}
{{--            <label for="inputCity">City</label>--}}
{{--            <input type="text" class="form-control" id="inputCity">--}}
{{--        </div>--}}
{{--    </div>--}}



{{--        <div class="form-group col-md-4">--}}
{{--            <label for="inputState">State</label>--}}
{{--            <select id="inputState" class="form-control">--}}
{{--                <option selected>Choose...</option>--}}
{{--                <option>...</option>--}}
{{--            </select>--}}
{{--        </div>--}}
{{--    <div>--}}
{{--        <div class="form-row   justify-content-center">--}}
{{--            <label for="inputZip">Zip</label>--}}
{{--            <input type="text" class="form-control" id="inputZip">--}}
{{--        </div>--}}

{{--        <div class="form-group form-row  justify-content-center">--}}
{{--        <div class="form-check">--}}
{{--            <input class="form-check-input" type="checkbox" id="gridCheck">--}}
{{--            <label class="form-check-label" for="gridCheck">--}}
{{--                Check me out--}}
{{--            </label>--}}
{{--        </div>--}}
{{--         </div>--}}
{{--    </div>--}}
    <div class="form-group form-row justify-content-center">
    <button type="submit" class="btn btn-primary">Register</button>
    </div>
</form>
