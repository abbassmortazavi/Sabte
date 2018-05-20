<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Laravel</title>

    </head>
    <body>
        <div class="container">
            <h1 class="text-info text-center">ثبت اطلاعات</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="menu pull-right">
                        <ul class="list-group-item">
                            <li class="float-right"><a class="btn btn-info" href="{{ route('register') }}">عضویت</a> </li>
                            <li><a class="btn btn-warning" href="{{ route('login') }}">ورود</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min') }}"></script>
    </body>
</html>
