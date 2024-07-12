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
        img {
            width: 10%;
            height: 10%;
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.categories.index') }}">Gérer les Catégories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.products.index') }}">Gérer les Produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.orders.index') }}">Voir les Commandes</a>
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
                <div class="col-md-8">
                    <div class="feature-box">
                        <h2>Promotions</h2>
                        @if ($promotions->count() > 0)
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('img/' . $promotions[0]->image) }}" alt="{{ $promotions[0]->name }}">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{ $promotions[0]->name }}</h5>
                                    <p>{{ $promotions[0]->description }}</p>
                                    <p>Prix : {{ $promotions[0]->price }} €</p>
                                </div>
                            </div>
                            <div style="text-align:center; margin-top:10px;">
                                <button class="btn btn-primary" onclick="prevPromotion()" disabled>Promotion Précédente</button>
                                <button class="btn btn-primary" onclick="nextPromotion()" {{ $promotions->count() == 1 ? 'disabled' : '' }}>Promotion Suivante</button>
                            </div>
                        @else
                            <p>Aucune promotion en ce moment.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        var currentPromotionIndex = 0;
        var promotionsCount = {{ $promotions->count() }};

        function showPromotion(index) {
            var promotion = document.querySelector('.carousel-item');
            promotion.innerHTML = `
                <img class="d-block w-100" src="{{ asset('img/') }}/${promotions[index].image}" alt="${promotions[index].name}">
                <div class="carousel-caption d-none d-md-block">
                    <h5>${promotions[index].name}</h5>
                    <p>${promotions[index].description}</p>
                    <p>Prix : ${promotions[index].price} €</p>
                </div>
            `;
            currentPromotionIndex = index;
            updateButtonsState();
        }

        function prevPromotion() {
            currentPromotionIndex--;
            showPromotion(currentPromotionIndex);
        }

        function nextPromotion() {
            currentPromotionIndex++;
            showPromotion(currentPromotionIndex);
        }

        function updateButtonsState() {
            var prevButton = document.querySelector('.btn-primary:first-child');
            var nextButton = document.querySelector('.btn-primary:last-child');

            if (currentPromotionIndex === 0) {
                prevButton.disabled = true;
            } else {
                prevButton.disabled = false;
            }

            if (currentPromotionIndex === promotionsCount - 1) {
                nextButton.disabled = true;
            } else {
                nextButton.disabled = false;
            }
        }

        updateButtonsState();
    </script>
</body>
</html>
