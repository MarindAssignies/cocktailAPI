<?php 

include 'getAPI.php';
include 'form_handler.php';

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
    <!-- Form -->
    <form action="./random.php" method='get'>
        <input style="display: none;" type="text" name="random" value="true">
        <input type="submit" value="Random">
    </form>
    <form action="#" method="get">
        <input type="text" name="ingredient" placeholder="Ingredient" value="<?= $ingredient ?>">
        <input type="submit">
    </form>

    <form action="cocktail.php?name<?= $_drink->strDrink ?>" method="get">
        <input type="text" name="name" placeholder="Name" value="<?= $name ?>">
        <input type="submit">
    </form>

    <form action="#" method="get">
        <?php foreach($types as $_type): ?>
            <br>
            <label>
                <input
                    type="radio"
                    name="type"
                    value="<?= $_type ?>"
                    <?= $_GET['type'] === $_type ? 'checked' : '' ?>
                >
                <?= ucfirst($_type) ?>
            </label>
        <?php endforeach; ?>
        <input type="submit">
    </form>

    <!-- Results -->
    <?php foreach($result->drinks as $_drink ): ?>
        <div><?= $_drink->strDrink ?></div>
        <img src="<?= $_drink->strDrinkThumb ?>" alt="">
    <?php endforeach; ?>


</body>
</html>