<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <title>Shop</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="{{ route('shop') }}">Shop</a></li>
                <li><a href="{{ route('cart') }}">Cart</a></li>
                @auth
                    <li class="user">Hi, {{ auth()->user()->firstname }} 🙂 </li>
                    <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="logout" type="submit">Logout</button>
                    </form>
                @endauth
                @guest
                <li><a href="{{ route('register') }}">Register</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>    
                @endguest
                
            </ul>
        </nav>
    </header>
    @yield('content')
</body>
</html>