<?php 

include 'getAPI.php';
include 'form_handler.php';

$activeCocktail = strtolower($_GET['name']);
$activeCocktailInfo = nameUrl($activeCocktail);

foreach ($activeCocktailInfo->drinks as $_drink) {

    if(strtolower($_drink->strDrink) === $activeCocktail)
    {
        $searchedDrink = $_drink;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cocktail</title>
</head>
<body>
    <h2 class="name"><?= $searchedDrink->strDrink ?></h2>
    <img src="<?= $searchedDrink->strDrinkThumb ?>" alt="">
</body>
</html>