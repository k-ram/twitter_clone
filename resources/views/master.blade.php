<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"> 
        <title>@yield('title') - Twitter Clone</title>
        <meta name="description" content="@yield('meta-description')">

        <link href="//fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/css/main.css">


    </head>
    <body>
        <div class="container">

            <nav class="navbar">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/contact">Contact</a></li>
                @if(\Auth::check())
                    <li><a href="/logout">Logout</a></li>
                @else
                    <li><a href="/register">Register</a></li>
                    <li><a href="/login">Login</a></li>

                @endif
                </ul>
            </nav>

            <div class="content">
                
                @yield('content')

            </div>
    </div>

    </body>
</html>