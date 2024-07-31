<?php

$recipes = [
    [
        "id" => 1,
        "title" => "Pasta Bolognese",
        "image" => "https://assets.afcdn.com/recipe/20130627/5710_w1024h768c1cx1485cy2482cxt0cyt0cxb2500cyb3750.jpg",
        "username" => "Lea",
        "category" => "Entrées",
    ],
    [
        "id" => 2,
        "title" => "Tiramisu",
        "image" => "https://assets.afcdn.com/recipe/20161123/1509_w1024h768c1cx1920cy2880.jpg",
        "username" => "Marie",
        "category" => "Desserts",
    ],
    [
        "id" => 3,
        "title" => "Tomates farcies",
        "image" => "https://assets.afcdn.com/recipe/20161128/8069_w1024h768c1cx1872cy2808.jpg",
        "username" => "Emily",
        "category" => "Plats",
        "country" => "Français",
    ],
    [
        "id" => 4,
        "title" => "Gratin de pommes de terre",
        "image" => "https://assets.afcdn.com/recipe/20180123/77042_w314h314c1cx2625cy1750cxt0cyt0cxb5250cyb3500.webp",
        "username" => "Lisa",
        "category" => "Plats",
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - My Chef</title>
    <style>
        .container {
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
    <ul class="container">
        <?php for ($li = 0; $li <= 3; $li++) : ?>

            <li>
                <img src=<?php echo $recipes[$li]['image'] ?> alt="photos de cuisine">
                <?php echo $recipes[$li]['id'] . $recipes[$li]['title'] . $recipes[$li]['category'] . " (" . $recipes[$li]['username'] . ")"; ?>
            </li>
        <?php endfor; ?>
    </ul>
</body>

</html>