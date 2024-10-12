<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    <nav>
        <a href="{{route('person.create')}}">Creation</a>
        <a href="{{route('person.login')}}">Login</a>
        @can('authenticated')
            <a href="{{route('person.logout')}}">Logout</a>
        @endcan
    </nav>
    @yield('content')
</body>
</html>
