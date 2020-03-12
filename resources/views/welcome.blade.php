<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    .container {
        margin-top: 20%;
        text-align: center;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-3">
                @if (Route::has('login')) @auth <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login') }}"><button type="button" class="btn btn-primary">
                        Login
                    </button></a>

            </div>
            <div class="col-md-3">
                @if (Route::has('register'))
                <a href="{{ route('register') }}">
                    <button type="button" class="btn btn-primary">
                        Register
                    </button>
                </a>
                @endif
                @endauth

                @endif
            </div>
            <div class="col-md-3">
            </div>

        </div>
    </div>



</body>

</html>