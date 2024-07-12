<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique de Bières</title>
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

        img{
            width: 200px; 
            height: auto;
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

        h2.card-body{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        div.card-body{
            border: 0ch;
        }
    </style>
</head>
<body>
    <header>
        <!-- Barre de navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <H1 class="navbar-brand">La cave de ton grand père</H1>
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
    <main class="py-4">
        @yield('content')
    </main>
    <footer class="footer">
        <!-- Pied de page -->
    </footer>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Autres scripts -->
</body>
</html>
