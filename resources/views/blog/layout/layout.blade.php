<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('blog-head-specific')
    <link rel="stylesheet" href="/css/admin.css">
</head>
<body>
    @include('blog/layout/blog-nav')
    @include('layout/navigation')
    @yield('blog-content')
</body>
</html>