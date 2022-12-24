<!doctype html>
<html>
<head>
    @include('templates.head')
    <title>@yield('title')</title>
</head>
<body>
    <div>
        @yield('content')
    <script src="{{ asset('./node_modules/flowbite/dist/flowbite.js')}}"></script>
    </div>
    <script>
        const msgError = document.querySelector('.msg-error');
        const msgParent = document.querySelector('.msg-parent');
        msgError.addEventListener('click', function(){
            msgParent.classList.add('hidden');
        });
    </script> 
</body>
</html>

