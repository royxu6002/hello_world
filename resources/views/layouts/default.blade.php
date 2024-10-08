<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title', 'weibo app') - first new application
    </title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    @include('layouts._header')

    <div class="container">
        @include('shared._messages')
        @yield('content')
        @include('layouts._footer')
    </div>
</body>
</html>