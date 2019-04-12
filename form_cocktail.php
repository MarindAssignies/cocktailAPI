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
    <link rel="stylesheet" href="styleform.css">
</head>
<body>
    <!-- Form -->
    <form action="./random.php" method='get'>
        <input style="display: none;" type="text" name="random" value="true">
        <input type="submit" value="Random">
    </form>

    <form action="#" autocomplete="off" method="get">
        <div class="selection">
            <input id="selectIng" type="text" name="ingredient" placeholder="Ingredient" value="<?= $ingredient ?>">
        </div>
        <input id="multIng" class="inputHidden" type="text" name="ingredients" value="">
        <input type="submit">
    </form>

    <form action="cocktail.php?name<?= $_drink->strDrink ?>" autocomplete="off" method="get">
        <div class="selection">
            <input id="selectName" type="text" name="name" placeholder="Name" value="<?= $name ?>">
        </div>
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

    <script src="script.js"></script>

</body>
</html>