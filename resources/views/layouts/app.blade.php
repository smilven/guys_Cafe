<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
    

    <script>
        function preventBack(){
          window.history.forward()};
        setTimeout("preventBack()",0);
        window,onunload=function(){
          null;
        }
        </script>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    


    <div class="container">
        <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
            @yield('content')
     
        </div>
    </div>
</body>

</html>
