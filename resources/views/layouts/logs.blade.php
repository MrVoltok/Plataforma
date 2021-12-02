<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/logs/style_log.css">
    <link rel="stylesheet" href="/css/logs/style_register.css">
    <link rel="stylesheet" href="/css/logs/style_login.css">
    <title>@yield('title')</title>
</head>
<body>
    {{-- Imagen o logo --}}
    <div class="left">
        <div class="image">
          <img src="/images/img_log.jpg" alt="">
        </div>
    </div>

    @yield('log')

</body>
</html>