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
    <form action="#" method="get">
        <input type="text" name="ingredient" placeholder="Ingredient" value="<?= $ingredient ?>">

        <div class="field">
            TYPE
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
        </div>

    <input type="submit">
    </form>

    

    <!-- Results -->
    <?php foreach($result->drinks as $_drink ): ?>
        <div><?= $_drink->strDrink ?></div>
    <?php endforeach; ?>

    
</body>
</html>