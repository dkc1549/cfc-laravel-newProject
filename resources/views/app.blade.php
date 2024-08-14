<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.header')
</head>
<body>
    @include('layouts.navbar')
        {{-- main content start --}}
            @yield('main-content')
        {{-- main content finish --}}
    @include('layouts.footer')
</body>
</html>