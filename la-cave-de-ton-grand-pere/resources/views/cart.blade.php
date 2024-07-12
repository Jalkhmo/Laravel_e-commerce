<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier - Boutique de Bières</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <style>
        body {
            background-color: #8B4513; 
            color: #333; 
        }   
        .jumbotron {
            background-color: #ffffff; 
            color: #333;
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid #8B4513; 
            border-radius: 10px;
        }
        .feature-box {
            border: 1px solid #8B4513; 
            padding: 20px;
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 10px;
        }
        .card-body {
            border: 1px solid #000000; 
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Boutique de Bières</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Panier <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="jumbotron jumbotron-fluid">
                <div class="container text-center">
                    <h1 class="display-4">Mon Panier</h1>
                    <p class="lead">Voici les produits que vous avez ajoutés dans votre panier :</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    @if (empty($cart))
                        <div class="alert alert-info" role="alert">
                            Votre panier est vide pour le moment.
                        </div>
                    @else
                        <div class="card mb-3">
                            <div class="card-body">
                                @foreach ($cart as $item)
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                        <div class="col-md-6">
                                            <h4>{{ $item['product']->name }}</h4>
                                            <p>{{ $item['product']->description }}</p>
                                        </div>
                                        <div class="col-md-3">
                                            <p><strong>Prix: {{ $item['product']->price }} €</strong></p>
                                            <p>Quantité: {{ $item['quantity'] }}</p>
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    <a href="{{ route('home') }}" class="btn btn-primary">Continuer vos achats</a>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
