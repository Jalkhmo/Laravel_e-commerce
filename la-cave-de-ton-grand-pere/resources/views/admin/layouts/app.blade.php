<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
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
    </style>
</head>
<body>
    <header>
        <!-- Barre de navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <H1 class="navbar-brand" href="#">Admin Panel</H1>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <!-- Ajoutez ici vos liens de navigation -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.categories.index') }}">Catégories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.products.index') }}">Produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.orders.index') }}">Commandes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="py-4">
        @yield('content')
    </main>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
