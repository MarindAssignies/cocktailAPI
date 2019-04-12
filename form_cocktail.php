<?php
include 'form_handler.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>QCM</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form id="reg-form" action="#" method="post">
            <h1 class='form-title'>This is your fridge</h1>

            <h2 class='form-description'>You can answer the question to get started</h2>
    <!-- Cocktails with or without alcohol  -->
            <div class="tab">
                <span>Are you looking for cocktails with alcohol or without alcohol ?</span>
                <?php foreach($cocktails as $_cocktail): ?>
                    <br>
                    <label>
                        <input
                            type="radio"
                            name="cocktails"
                            value="<?= $_cocktail ?>"
                            <?= $_POST['cocktails'] === $_cocktail ? 'checked' : '' ?>
                        >
                        <?= ucfirst($_cocktail) ?>
                    </label>
                <?php endforeach; ?>
                <div class="form-button">
                    <button type="submit" id="nextBtn" >Next</button>
                </div>
            </div>

        <!--If the user answer cocktail with alcohol -->
            <?php if($_POST['cocktails'] == "alcohol"): ?>

            <!-- Options of alcohol for alcoholic cocktails -->
            <div class="tab">
                <span>What do you like ?</span>
                <?php foreach($alcohol as $_alcohol): ?>
                    <br>
                    <label>
                        <input
                            type="radio"
                            name="alcohol"
                            value="<?= $_alcohol ?>"
                            <?= $_POST['alcohol'] === $_alcohol ? 'checked' : '' ?>
                        >
                        <?= ucfirst($_alcohol) ?>
                    </label>
                <?php endforeach; ?>
                <div class="form-button">
                    <button type="submit" id="nextBtn" >Next</button>
                </div>
            </div>
        
            <?php   
                $url_type='https://www.thecocktaildb.com/api/json/v2/8673533/search.php?';
                $url_type .= http_build_query([
                    "s" => $_POST['alcohol']
                ]);
                $data_alcohol=file_get_contents($url_type);
                $result_alcohol = json_decode($data_alcohol);
            ?>

           <!-- Options for ingredient that goes along with the alcohol -->

            <?php foreach($result_alcohol->drinks as $key => $_ingredient):
                if($key < 3):
                    $ingredient = $_ingredient->strIngredient2;
                    array_push($ingredient_alcohol, $ingredient);
                endif;
            endforeach; ?>
           
            <div class="tab">
                <span>Do you have this ?</span>
                <?php foreach($ingredient_alcohol as $_ingredient_alcohol): ?>
                    <br>
                    <label>
                        <input
                            type="radio"
                            name="ingredient_alcohol"
                            value="<?= $_ingredient_alcohol ?>"
                            <?= $_POST['ingredient_alcohol'] === $_ingredient_alcohol ? 'checked' : '' ?>
                        >
                        <?= ucfirst($_ingredient_alcohol) ?>
                    </label>
                <?php endforeach; ?>
            </div>
           




<!-- FOR COCKTAILS WITHOUT ALCOHOL  -->

    <?php elseif($_POST['cocktails'] == "without alcohol"): ?>

            <!-- Find ingredient that goes along with non alcoholic cocktails -->
            <?php 
            $url_type='https://www.thecocktaildb.com/api/json/v2/8673533/search.php?';
            $url_type .= http_build_query([
                "s" => $_POST['non_alcohol']
            ]);
            $data_non_alcohol=file_get_contents($url_type);
            $result_non_alcohol = json_decode($data_non_alcohol);


            foreach($result_non_alcohol->drinks as $key => $_ingredient):
                if($key < 3 && $_ingredient->strAlcoholic === 'Non alcoholic'):
                    array_push($ingredient_non_alcohol, $_ingredient->strIngredient1);

                endif;
            endforeach; ?>

        <div class="tab">
            <span>What do you like ?</span>
            <?php foreach($non_alcohol as $_non_alcohol): ?>
                <br>
                <label>
                    <input
                        type="radio"
                        name="non_alcohol"
                        value="<?= $_non_alcohol ?>"
                        <?= $_POST['non_alcohol'] === $_non_alcohol ? 'checked' : '' ?>
                    >
                    <?= ucfirst($_non_alcohol) ?>
                </label>
            <?php endforeach; ?>
            <div class="form-button">
                <button type="submit" id="nextBtn">Next</button>
            </div>
        </div>
  

        <div class="tab">
            <span>Do you have this ?</span>
            <?php foreach($ingredient_non_alcohol as $_ingredient_non_alcohol): ?>
                <br>
                <label>
                    <input
                        type="radio"
                        name="ingredient_non_alcohol"
                        value="<?= $_ingredient_non_alcohol ?>"
                        <?= $_POST['ingredient_non_alcohol'] === $_ingredient_non_alcohol ? 'checked' : '' ?>
                    >
                    <?= ucfirst($_ingredient_non_alcohol) ?>
                </label>
            <?php endforeach; ?>
        </div>


    <?php endif; ?>
    </form>
    </body>
</html>
