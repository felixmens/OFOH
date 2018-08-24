<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/animatecss/animate.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>{{config('app.name', 'Our father\'s Orphanage Home')}}</title>
</head>
<body>
    <div class="layout-transparent mdl-layout mdl-js-layout mdl-layout--fixed-header animated fadeIn">    
        @yield('content')
    </div>
    
    <!-- Material JavaScripts -->
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/material.js')}}"></script>
</body>
</html>