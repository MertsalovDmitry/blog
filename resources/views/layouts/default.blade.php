<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    @include('includes.header')
    
    @include('includes.breadcrumb')

    @include('includes.preloader')

    @yield('content')

    @include('includes.footer')
</body>
</html>