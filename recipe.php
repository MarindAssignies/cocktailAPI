<?php include 'header_template.php'; 
include 'getAPI.php';

$activeCocktail = strtolower($_GET['name']);
$activeCocktailInfo = nameUrl($activeCocktail);

foreach ($activeCocktailInfo->drinks as $_drink) {

    if(strtolower($_drink->strDrink) === $activeCocktail)
    {
        $searchedDrink = $_drink;
    }
}
?>

<main>
    <article>
        <div class='drink-info'>
            <img src='<?php echo $searchedDrink->strDrinkThumb ?>' alt='imgdrink'>
            <div class="drink-text">
                <h4><?php echo $searchedDrink->strAlcoholic ?> DRINK</h4>
                <h1><?php echo $searchedDrink->strDrink ?></h1>
                <h2>Ingredients</h2>
                <p><?php if($searchedDrink->strMeasure1.$searchedDrink->strIngredient1 != 0) { 
                            echo  $searchedDrink->strMeasure1.$searchedDrink->strIngredient1."<br>";
                        } ?></p>
                <p><?php if($searchedDrink->strMeasure2.$searchedDrink->strIngredient2 != 0) { 
                            echo  $searchedDrink->strMeasure2.$searchedDrink->strIngredient2."<br>";
                        } ?></p>
                <p><?php if($searchedDrink->strMeasure3.$searchedDrink->strIngredient3 != 0) { 
                            echo  $searchedDrink->strMeasure3.$searchedDrink->strIngredient3."<br>";
                        } ?></p>
                <p><?php if($searchedDrink->strMeasure4.$searchedDrink->strIngredient4 != 0) { 
                            echo  $searchedDrink->strMeasure4.$searchedDrink->strIngredient4."<br>";
                        } ?></p>
                <p><?php if($searchedDrink->strMeasure5.$searchedDrink->strIngredient5 != 0) { 
                            echo  $searchedDrink->strMeasure5.$searchedDrink->strIngredient5."<br>";
                        } ?></p>
                <p><?php if($searchedDrink->strMeasure6.$searchedDrink->strIngredient6 != 0) { 
                            echo  $searchedDrink->strMeasure6.$searchedDrink->strIngredient6."<br>";
                        } ?></p>
                <p><?php if($searchedDrink->strMeasure7.$searchedDrink->strIngredient7 != 0) { 
                            echo  $searchedDrink->strMeasure7.$searchedDrink->strIngredient7."<br>";
                        } ?></p>
                <p><?php if($searchedDrink->strMeasure8.$searchedDrink->strIngredient8 != 0) { 
                            echo  $searchedDrink->strMeasure8.$searchedDrink->strIngredient8."<br>";
                        } ?></p>
                <p><?php if($searchedDrink->strMeasure9.$searchedDrink->strIngredient9 != 0) { 
                            echo  $searchedDrink->strMeasure9.$searchedDrink->strIngredient9."<br>";
                        } ?></p>
                <p><?php if($searchedDrink->strMeasure10.$searchedDrink->strIngredient10 != 0) { 
                            echo  $searchedDrink->strMeasure10.$searchedDrink->strIngredient10."<br>";
                        } ?></p>
                <p><?php if($searchedDrink->strMeasure11.$searchedDrink->strIngredient11 != 0) { 
                            echo  $searchedDrink->strMeasure11.$searchedDrink->strIngredient11."<br>";
                        } ?></p>
                <p><?php if($searchedDrink->strMeasure12.$searchedDrink->strIngredient12 != 0) { 
                            echo  $searchedDrink->strMeasure12.$searchedDrink->strIngredient12."<br>";
                        } ?></p>
                <p><?php if($searchedDrink->strMeasure13.$searchedDrink->strIngredient13 != 0) { 
                            echo  $searchedDrink->strMeasure13.$searchedDrink->strIngredient13."<br>";
                        } ?></p>
                <p><?php if($searchedDrink->strMeasure14.$searchedDrink->strIngredient14 != 0) { 
                            echo  $searchedDrink->strMeasure14.$searchedDrink->strIngredient14."<br>";
                        } ?></p>
                <p><?php if($searchedDrink->strMeasure15.$searchedDrink->strIngredient15 != 0) { 
                            echo  $searchedDrink->strMeasure6.$searchedDrink->strIngredient15."<br>";
                        } ?></p>
                <h2>Instructions</h2>
                <p><?php echo $searchedDrink->strInstructions ?></p>
                <h2>Type of glass</h2>
                <p><?php echo $searchedDrink->strGlass?></p>
            </div>
        </div>

    </article>
    <div class='related-content'>
        <h2>Similar recipes</h2>
        <?php foreach ($activeCocktailInfo->drinks as $_ingredient){
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
                $related_id = $_related->idDrink;
            ?>
            <div class="card">
                <div><?php echo $related_image;?></div>
                <h2><?php echo $related_name;?></h2>
                <form action="recipe.php?cocktailId=<?php echo $related_id?>" method="get">
                    <label for="<?= $_related->idDrink ?>">See recipe</label>
                    <input id="<?= $_related->idDrink ?>" type="submit" name="cocktailId"
                        value=<?php echo $_related->idDrink?>>
                </form>
            </div>
            <?php
                }
            };
            ?>
        </div>
    </div>
</main>

<?php include 'footer_template.php'; ?>