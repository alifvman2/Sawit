<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kelapa Sawit</title>
    <link href="{{ URL::to('asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('asset/css/style.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style type="text/css">
        body,html {
            height:100%;
            width: 100%;
            position: absolute;
        }
        input.transparent-input{
            background-color:transparent !important;
        }
    </style>
</head>
<body>

    <main class="login-form">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 d-flex align-items-center flex-column justify-content-center p-5" style="background: #5EC394; min-height: 100vh;">
                    <img src="{{ URL::to('/asset/img/bpdpks.png') }}" class="img-fluid" style="max-width: 80%; width: auto;">
                </div>
                <div class="col-6 row py-5 bc-white addScroll " style="min-height: 100vh;">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>

</body>
</html>