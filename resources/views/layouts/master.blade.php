<!DOCTYPE html>
<html>

    <head>
        <title>@yield("title") | My blog</title>
    </head>

    <body>
        @include('layouts.partials.navigation')
        <div class="container">
            @yield('content')
        </div>

    </body>

</html>
