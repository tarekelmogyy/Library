<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container py-3">
        @yield('content')
    </div>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/jquery-3.6.3.js')}}"></script>
</body>
</html>
