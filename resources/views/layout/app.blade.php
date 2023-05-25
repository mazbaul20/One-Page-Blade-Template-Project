<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
</head>
<body>
    @include('layout.header')
    @yield('content')
    @include('layout.footer')
    <script src="{{asset('js/bootstrap/bootstrap.bundle.min.js')}}"></script>
</body>
</html>

