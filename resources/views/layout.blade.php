<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <script src="https://kit.fontawesome.com/0e14ebdea1.js" crossorigin="anonymous"></script>
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/a_style.css') }}">

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    
</head>
<body>
    @include('layout_header')
    <br><br>
    
    <main>
        @yield('content')
    </main>

    @include('layout_footer')
    
</body>
</html>