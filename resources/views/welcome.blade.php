<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="login">
<div class="container">
    <div>
        {{ dump($currentUser) }}
        <form action="{{ route('auth:login') }}" method="POST">
            {{ csrf_field() }}
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="login" class="btn btn-success" value="Login">
        </form>
    </div>
</div>
<script src="{{ asset('js/bundle.js') }}"></script>
</body>
</html>
