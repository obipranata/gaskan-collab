<!doctype html>
<html>
<head>
    @include('templates.head')
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        @include('templates.navbar')
        @yield('content')
    <script src="{{ asset('./node_modules/flowbite/dist/flowbite.js')}}"></script>
    </div>
    @vite('resources/js/app.js')
</body>
</html>