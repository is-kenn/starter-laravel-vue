<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Login Page</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body>
    <h2>Login</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="email">E-Mail Address</label>
            <div>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <span><strong>{{ $errors->first('email') }}</strong></span>
                @enderror
            </div>
        </div>

        <div>
            <label for="password">Password</label>

            <div>
                <input id="password" type="password" name="password" required>
            </div>
        </div>

        <div>
            <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                Remember Me
            </label>
        </div>

        <div>
            <button type="submit">Login</button>

            <a href="{{ route('password.request') }}">Forgot Password?</a>
        </div>
    </form>
</body>

</html>
