<?php 

include 'getAPI.php';

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
    <form action="#" method="get">
        <input type="text" name="ingredient" placeholder="Ingredient" value="<?= $ingredient ?>">
        <input type="submit">
    </form>

    <!-- Results -->
    <?php foreach($result->drinks as $_drink ): ?>
        <div><?= $_drink->strDrink ?></div>
    <?php endforeach; ?>
</body>
</html>