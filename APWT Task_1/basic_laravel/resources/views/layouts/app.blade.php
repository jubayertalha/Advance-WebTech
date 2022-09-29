<html>
    <head>
        <title>Laravel Basic</title>
    </head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <body>
        <div class="container" style="margin: 20px;">
            @include('inc.header')
            <div style="margin: 20px;">
                @yield('content')
            </div>
        </div>
    </body>
</html>