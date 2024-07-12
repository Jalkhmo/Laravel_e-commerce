<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - La cave de ton Grand Pères</title>
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
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">La cave de ton Grand Pères</a>
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cart.view') }}">Panier</a>
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
                    <h1 class="display-4">Validation de la commande</h1>
                    <p class="lead">Veuillez remplir le formulaire pour finaliser votre commande :</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="{{ route('cart.process') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Adresse</label>
                            <input type="text" id="address" name="address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Numéro de téléphone</label>
                            <input type="text" id="phone_number" name="phone_number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="card_number">Numéro de carte de crédit</label>
                            <input type="text" id="card_number" name="card_number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="total">Total</label>
                            <input type="number" id="total" name="total" class="form-control" step="0.01" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Valider la commande</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
