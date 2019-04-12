<?php
    $url_popular_cocktail = 'https://www.thecocktaildb.com/api/json/v2/8673533/popular.php?fbclid=IwAR29Y-epsQOTh4buFBW7knYbwZqwK8jinD_FKGbxn2AnytiWEdHEf22uG0E';
    $data_cocktail = file_get_contents($url_popular_cocktail);
    $result_popular = json_decode($data_cocktail);
?>

<?php include('header_template.php') ?>



<div class="intro">
    <div class="introtext">
        <h4>YOU LOVE COCKTAIL BUT YOU</h4>
        <h1>DON'T KNOW WHERE TO START ?</h1>
        <p>Go to your fridge, select which ingredients and alcohols you have and Sprit will tell you what you can
            create !
        </p>
        <a class="intro_button" href="fridge.php">LET'S SEE</a>
    </div>
    <img class="introsvg" src="images/introillus.svg" alt="imageintro">
</div>
<div class="populardiv">
    <div class="populartext">
        <h4>OUR</h4>
        <h2>POPULAR COCKTAILS</h2>
        <div class="glide">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <?php foreach ($result_popular->drinks as $_drink ): 
                    $drinkId = $_drink->idDrink ?>
                    <li class="glide__slide">
                        <form action="http://localhost/cocktailAPI/static/recipe.php?cocktailId=<?php echo $drinkId?>"
                            method="get">
                            <label for="<?= $_drink->idDrink ?>"><img
                                    src="<?= $result_thumb = $_drink->strDrinkThumb ?>"
                                    alt="<?=$_drink->strDrink ?> "></label>
                            <input id="<?= $_drink->idDrink ?>" type="submit" name="cocktailId"
                                value=<?php echo $_drink->idDrink?>>
                        </form>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="glide__arrows" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left" data-glide-dir=">"><img class="carouselarrow"
                        src="images/arrow.svg" alt="arrow"></button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir=">" onclick=""><img
                        class="carouselarrow" src="images/arrow.svg" alt="arrow"></button>
            </div>
        </div>
    </div>
</div>
<div class="randomdiv">
    <img class="randomsvg" src="images/randomillus.svg" alt="imagerandom">
    <div class="randomtext">
        <h4>YOUR COCKTAIL EXPERT</h4>
        <h1>FIND YOUR PERFECT MIX WITH SPRIT</h1>
        <p>We generate random cocktails to give you ideas for your events !
        </p>
        <a class="intro_button" href="random.php">LET'S GO</a>
    </div>
</div>


<?php include('footer_template.php') ?>