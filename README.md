Aurélien Bizien et Jade Ponthieu \
ESGI2

# Laravel_e-commerce

Projet de 2e année sur 2 jours pour la découverte de Laravel \
**Dans la cave de ton grand père** \
Le projet e-commerce par Aurélien Bizien et Jade Ponthieu

Initialisation :
php artisan migrate --path=database/migrations/2024_07_12_094719_create_categories_table.php
php artisan migrate
php artisan key:generate

## SQL

    ```-- Insertion dans la table `categories`

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Bouteille', 'Pour les petites soifs de tous les jours', '.', '2024-07-12 13:30:20', '2024-07-12 13:30:20'),
(2, 'Fut', 'Pour les plus grosses soifs ou les amis', '.', '2024-07-12 12:36:18', '2024-07-12 12:36:18');

-- Insertion dans la table `orders`
INSERT INTO `orders` (`id`, `email`, `product_list`, `address`, `phone_number`, `card_number`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1, 'client@example.com', '1, 3, 5', '123 Rue de Test', '1234567890', '\***\* \*\*** \***\* 1234', '36.60', 'pending', '2024-07-12 14:00:00', '2024-07-12 14:00:00'),
(2, 'customer@example.com', '2, 4, 6', '456 Avenue du Test', '9876543210', '\*\*** \***\* \*\*** 5678', '32.50', 'pending', '2024-07-12 14:00:00', '2024-07-12 14:00:00');

-- Insertion dans la table `products`
INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `category_id`, `promo`, `created_at`, `updated_at`) VALUES
(1, 'Lèpre', 'Au bon goût de maladie incurable', '6.50', 'lepre.png', 1, 0, '2024-07-12 12:36:18', '2024-07-12 12:36:18'),
(2, 'Virus', 'Parfaite pour déclencher une pandémie mondiale', '4.49', 'Virus.png', 1, 0, '2024-07-12 13:30:20', '2024-07-12 13:30:20'),
(3, 'Perroquet', 'Pour répéter tout ce qu\'on dit sur vous', '7.49', 'Perroquet.png', 1, 0, '2024-07-12 13:16:49', '2024-07-12 13:30:20'),
(4, 'Le Losc', 'Ne pas donner à vos enfants, ils pourraient adorer aller voir le Losc en match', '5.50', 'Le_losc.png', 1, 0, '2024-07-12 13:30:20', '2024-07-12 13:30:20'),
(5, 'La Hollande', 'Pour une haleine fraîche à coup sûr à l\'apéro', '3.60', 'La_hollande.png', 1, 0, '2024-07-12 12:36:18', '2024-07-12 12:36:18'),
(6, 'Jean', 'Se remémorer les bons souvenirs avec Jean', '3.50', 'Jean.png', 1, 0, '2024-07-12 13:30:20', '2024-07-12 13:30:20'),
(7, 'Despera d\'eau', 'L\'alcool c\'est de l\'eau', '6.30', 'Despera_deau.png', 1, 0, '2024-07-12 12:36:18', '2024-07-12 12:36:18'),
(8, 'L\'Anneau de Pouvoir', 'Consommer en jouant au trône avec vos amis (peut faire devenir fou)', '8.00', 'Anneau_de_pouvoir.png', 1, 0, '2024-07-12 13:16:49', '2024-07-12 13:30:20'),
(9, 'Affligeant', '-', '99.99', 'Affligeant.png', 2, 0, NULL, NULL),
(10, '2004', '', '20.00', '2004.png', 1, 0, NULL, NULL);

```

```

## Répartition des tâches

Jade : Visuel (HTML/CSS) / DB (création, schèmatisation) / partie Home et Panier
Aurélien : Partie Admin, checkout, catégorie, routes
