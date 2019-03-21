<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Shojumaru" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Dancing Script" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Artifika" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/png" href="images/favicon2.png">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        @Auth
        <div class="text-center">
            <div class="btn-group">
                <form action="{{ '/userpages.shoppinglist'}}">
                    <button type="submit" class="btn btn-danger">Shopping List</button>
                </form>
                <form action="{{ '/userpages.chorelist' }}">
                    <button type="submit" class="btn btn-danger">Chore List</button>
                </form>
                <form action="{{ '/home' }}">
                    <button type="submit" class="btn btn-danger">Account</button>
                </form>
            </div>
        </div>
        @endauth
            <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
