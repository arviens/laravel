<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link href="{{ asset('css/deps.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="login">
<div class="container">
    <h3 class="text-center">Please login</h3>
    <div class="col-md-12">
        <form class="form-horizontal" action="{{ route('auth:login') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name" class="cols-sm-2 control-label">Username</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="username" placeholder="Enter your username">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="cols-sm-2 control-label">Password</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Enter your password">
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Login</button>
            </div>
        </form>
    </div>
</div>
<script src="{{ asset('js/bundle.js') }}"></script>
</body>
</html>
