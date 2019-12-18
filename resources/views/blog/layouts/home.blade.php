<!doctype html>
<html lang="en">
<head>
    @include('blog.includes.head')
</head>
<body>
    @include('blog.includes.header')

    @include('blog.includes.preloader')

    @yield('content')

    @include('blog.includes.footer')
</body>
</html>