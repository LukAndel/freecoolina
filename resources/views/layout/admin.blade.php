<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('head-specific')
    <link rel="stylesheet" href="/css/admin.css">
</head>
<body>
    
    @include('layout/navigation')
    @yield('content')

</body>
</html>