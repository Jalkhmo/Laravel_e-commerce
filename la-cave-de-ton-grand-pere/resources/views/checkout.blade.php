<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - La cave de ton Grand Pères</title>
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
                <h1 class="navbar-brand" href="#">La cave de ton Grand Père</h1>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Accueil</a>
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
                            <p><strong>Total: {{ $total }} €</strong></p>
                            <input type="hidden" id="total" name="total" value="{{ $total }}">
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
