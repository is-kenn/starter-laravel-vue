<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @if (Auth::guard('web')->check())
        @vite('resources/js/main.js')
    @elseif (Auth::guard('admin')->check())
        @vite('resources/js/admin.js')
    @endif
</head>

<body class="font-sans antialiased">
    <div id="app">
        <nav>
            <ul>
                <li><router-link to='/'>Go to Home</router-link></li>
                <li><router-link to='/about'>Go to About</router-link></li>
                <li>
                    <Logout />
                </li>
            </ul>
        </nav>
        <hr>
        <router-view />
    </div>
</body>

</html>
