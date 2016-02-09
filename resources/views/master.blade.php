<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"> 
        <title>@yield('title') - Twitter Clone</title>
        <meta name="description" content="@yield('meta-description')">

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .title {
                font-size: 96px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="container">

            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/register">Register</a></li>
                    <li><a href="/login">Login</a></li>
                </ul>
            </nav>

            <div class="content">
                
                @yield('content')

            </div>
    </div>

    </body>
</html>