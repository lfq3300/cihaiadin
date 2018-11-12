<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" >
    <!-- <meta name=”viewport” content=”width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=no” /> -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>慈海文化</title>
    <link rel="stylesheet" href="{{asset('/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('/css/page.css')}}">
    <script src="{{asset('/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/js/page.js')}}"></script>
</head>
<body>
@yield('body')
@include('Home.Public.footer')
</body>
</html>