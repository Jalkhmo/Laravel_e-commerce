<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Boutique de Bières</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
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

        li {
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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <H1 class="navbar-brand">La cave de ton grand père</H1>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home') }}">Accueil <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cart.view') }}">Panier</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="jumbotron jumbotron-fluid">
            <div class="container text-center">
                <h1 class="display-4">Bienvenue sur la Boutique de Bières</h1>
                <p class="lead">Découvrez notre sélection de bières artisanales de qualité.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-box">
                        <h1>Choisissez une catégorie</h1>
                        <ul class="list-group">
                            @foreach ($categories as $category)
                                <li class="list-group-item">
                                    <h2>
                                        <a class="cat" href="{{ route('categories.show', ['id' => $category->id]) }}">{{ $category->name }}</a>
                                    </h2>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <h2>Promotions</h2>
                        <p>Profitez de nos promotions spéciales sur une sélection de bières.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
