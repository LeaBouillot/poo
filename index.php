<?php

$recipes = [
    [
        "id" => 1,
        "title" => "Pasta Bolognese",
        "image" => "https://assets.afcdn.com/recipe/20130627/5710_w1024h768c1cx1485cy2482cxt0cyt0cxb2500cyb3750.jpg",
        "username" => "Lea",
        "category" => "Entrées",
        "is_enabled" => true,
    ],
    [
        "id" => 2,
        "title" => "Tiramisu",
        "image" => "https://assets.afcdn.com/recipe/20161123/1509_w1024h768c1cx1920cy2880.jpg",
        "username" => "Marie",
        "category" => "Desserts",
        "is_enabled" => false,
    ],
    [
        "id" => 3,
        "title" => "Tomates farcies",
        "image" => "https://assets.afcdn.com/recipe/20161128/8069_w1024h768c1cx1872cy2808.jpg",
        "username" => "Emily",
        "category" => "Plats",
        "country" => "Français",
        "is_enabled" => true,
    ],
    [
        "id" => 4,
        "title" => "Gratin de pommes de terre",
        "image" => "https://assets.afcdn.com/recipe/20180123/77042_w314h314c1cx2625cy1750cxt0cyt0cxb5250cyb3500.webp",
        "username" => "Lisa",
        "category" => "Plats",
        "is_enabled" => true,
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - My Chef</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .list {
            display: flex;
        }

        img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            margin: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Affichage des recettes</h1>
        <!-- boucle sur les recettes -->
        <?php foreach ($recipes as $recipe) : ?>
            <!-- si la clé existe et a pour valeur "vrai", on affiche -->
            <?php if (array_key_exists('is_enabled', $recipe) && $recipe['is_enabled'] == true) : ?>
                <div class="col-md-3 ">
                    <a href="recipe.php?id=<?= $recipe['id'] ?>">
                        <img src="<?= $recipe['image'] ?>" alt="Image de la recette">
                        <h3><?= $recipe['title'] ?></h3>
                    </a>
                    <div><?php echo $recipe['category']; ?></div>
                </div>
            <?php endif; ?>
        <?php endforeach ?>

    </div>
</body>

</html>