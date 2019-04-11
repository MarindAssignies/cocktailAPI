<?php include 'header_template.php'; ?>


<main>
    <article>
        <?php 
            $url_rand = "https://www.thecocktaildb.com/api/json/v2/8673533/random.php";

            $data_rand = file_get_contents($url_rand);
            $rand = json_decode($data_rand);

            foreach ($rand->drinks as $rand_drink){?>
        <div class='drink-info'>
            <img src='<?php echo $rand_drink->strDrinkThumb ?>' alt='imgdrink'>
            <div class="drink-text">
                <h4><?php echo $rand_drink->strAlcoholic ?> DRINK</h4>
                <h1><?php echo $rand_drink->strDrink ?></h1>
                <h2>Ingredients</h2>
                <p><?php if($rand_drink->strMeasure1.$rand_drink->strIngredient1 != 0) { 
                            echo  $rand_drink->strMeasure1.$rand_drink->strIngredient1."<br>";
                        } ?></p>
                <p><?php if($rand_drink->strMeasure2.$rand_drink->strIngredient2 != 0) { 
                            echo  $rand_drink->strMeasure2.$rand_drink->strIngredient2."<br>";
                        } ?></p>
                <p><?php if($rand_drink->strMeasure3.$rand_drink->strIngredient3 != 0) { 
                            echo  $rand_drink->strMeasure3.$rand_drink->strIngredient3."<br>";
                        } ?></p>
                <p><?php if($rand_drink->strMeasure4.$rand_drink->strIngredient4 != 0) { 
                            echo  $rand_drink->strMeasure4.$rand_drink->strIngredient4."<br>";
                        } ?></p>
                <p><?php if($rand_drink->strMeasure5.$rand_drink->strIngredient5 != 0) { 
                            echo  $rand_drink->strMeasure5.$rand_drink->strIngredient5."<br>";
                        } ?></p>
                <p><?php if($rand_drink->strMeasure6.$rand_drink->strIngredient6 != 0) { 
                            echo  $rand_drink->strMeasure6.$rand_drink->strIngredient6."<br>";
                        } ?></p>
                <p><?php if($rand_drink->strMeasure7.$rand_drink->strIngredient7 != 0) { 
                            echo  $rand_drink->strMeasure7.$rand_drink->strIngredient7."<br>";
                        } ?></p>
                <p><?php if($rand_drink->strMeasure8.$rand_drink->strIngredient8 != 0) { 
                            echo  $rand_drink->strMeasure8.$rand_drink->strIngredient8."<br>";
                        } ?></p>
                <p><?php if($rand_drink->strMeasure9.$rand_drink->strIngredient9 != 0) { 
                            echo  $rand_drink->strMeasure9.$rand_drink->strIngredient9."<br>";
                        } ?></p>
                <p><?php if($rand_drink->strMeasure10.$rand_drink->strIngredient10 != 0) { 
                            echo  $rand_drink->strMeasure10.$rand_drink->strIngredient10."<br>";
                        } ?></p>
                <p><?php if($rand_drink->strMeasure11.$rand_drink->strIngredient11 != 0) { 
                            echo  $rand_drink->strMeasure11.$rand_drink->strIngredient11."<br>";
                        } ?></p>
                <p><?php if($rand_drink->strMeasure12.$rand_drink->strIngredient12 != 0) { 
                            echo  $rand_drink->strMeasure12.$rand_drink->strIngredient12."<br>";
                        } ?></p>
                <p><?php if($rand_drink->strMeasure13.$rand_drink->strIngredient13 != 0) { 
                            echo  $rand_drink->strMeasure13.$rand_drink->strIngredient13."<br>";
                        } ?></p>
                <p><?php if($rand_drink->strMeasure14.$rand_drink->strIngredient14 != 0) { 
                            echo  $rand_drink->strMeasure14.$rand_drink->strIngredient14."<br>";
                        } ?></p>
                <p><?php if($rand_drink->strMeasure15.$rand_drink->strIngredient15 != 0) { 
                            echo  $rand_drink->strMeasure6.$rand_drink->strIngredient15."<br>";
                        } ?></p>
                <h2>Instructions</h2>
                <p><?php echo $rand_drink->strInstructions ?></p>
                <h2>Type of glass</h2>
                <p><?php echo $rand_drink->strGlass?></p>
            </div>
        </div>
        <?php
            }
            ?>
    </article>
    <div class='related-content'>
        <h2>Similar recipes</h2>
        <?php foreach ($rand->drinks as $_ingredient){
                $result_ingredient = $_ingredient->strIngredient1;
            };
            ?>
        <?php
                $url_result = "https://www.thecocktaildb.com/api/json/v2/8673533/filter.php?";
                $url_result .= http_build_query([
                'i' => $result_ingredient
                ]);
                $data_result = file_get_contents($url_result);
                $cocktail_result = json_decode($data_result);
            ?>
        <div class="cards">
            <?php  foreach ($cocktail_result->drinks as $key => $_related) {
                if($key < 3){
                $related_image = "<img src='".$_related->strDrinkThumb."' alt=''>";
                $related_name = "<span class='cards-name'>".$_related->strDrink."</span>";
            ?>
            <div class="card">
                <div><?php echo $related_image;?></div>
                <h2><?php echo $related_name;?></h2>
                <a
                    href="https://www.thecocktaildb.com/api/json/v2/8673533/search.php?s=<?php echo $_related->strDrink?>">See
                    the recipe</a>
            </div>
            <?php
                }
            };
            ?>
        </div>
    </div>
</main>

<?php include 'footer_template.php'; ?>