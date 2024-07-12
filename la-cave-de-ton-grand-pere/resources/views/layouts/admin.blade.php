<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        h1.navbar-brand {
            font-style: normal;
            color: #000000;
            text-decoration: none;
            text-align: center;
            font-size: 40px;
        }

        a.nav-link {
            color: #000000;
            text-decoration: none;
        }

        li.nav-item {
            display : inline-block;
            width : 33%;
            text-align: center;
            font-size: 20px;
        }

        body {
            background-color: #c18a62; 
            color: #333; 
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }   
        
        .jumbotron {
            background-color: #ffffff; 
            color: #333;
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid #c18a62; 
            border-radius: 10px;
        }
        .feature-box {
            border: 1px solid #c18a62; 
            padding: 20px;
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 10px;
        }
        .card-body {
            border: 1px solid #000000; 
        }

        a.cat{
            color: #62C1BA;
            font-size: 18px;
            font-weight:100;
            text-decoration: none;
        }
        a.btn{
            color: #000000;
        }

        button{
            background-color: #62C1BA;
            color: #000000;
            border: none; 
            padding: 15px 32px; 
            text-align: center; 
            display: inline-block; 
            font-size: 16px;
            margin: 4px 2px; 
            cursor: pointer; 
            border-radius: 12px;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <H1 class="navbar-brand" href="/">Home site</H1>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.products.index') }}">Produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.categories.index') }}">Catégories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.orders.index') }}">Commandes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
