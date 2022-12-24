<!doctype html>
<html>
<head>
    @include('templates.head')
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        @yield('content')
    <script src="{{ asset('./node_modules/flowbite/dist/flowbite.js')}}"></script>
    </div>

</body>
</html>