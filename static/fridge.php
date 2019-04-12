<?php 

include 'getAPI.php';
include '../form_handler.php';
include 'header_template.php' ?>

<div class="whatsinmyfridge">
    <div class="fridge_search">
        <h2>My ingredients</h2>
        <form action="#" autocomplete="off" method="get">
            <div class="selection">
                <input id="selectIng" type="text" name="ingredient" placeholder="Ingredient" value="<?= $ingredient ?>">
            </div>
            <input id="multIng" type="text" name="ingredients" value="" hidden>
            <input type="submit">
        </form>
        <form action="recipe.php?name<?= $_drink->strDrink ?>" autocomplete="off" method="get">
            <div class="selection">
                <input id="selectName" type="text" name="name" placeholder="Name" value="<?= $name ?>">
            </div>
            <input type="submit">
        </form>
        <h2>Alcoholic or not ?</h2>
        <form action="#" method="get">
            <?php foreach($types as $_type): ?>
            <br>
            <label class="select_label">
                <input type="radio" name="type" value="<?= $_type ?>" <?= $_GET['type'] === $_type ? 'checked' : '' ?>>
                <?= ucfirst($_type) ?>
            </label>
            <?php endforeach; ?>
            <input type="submit">
        </form>
    </div>
    <div class="result">
        <?php foreach($result->drinks as $_drink ): ?>
        <div class="result_element">
            <img src="<?= $_drink->strDrinkThumb ?>" alt="">
            <a href="recipe.php?name=<?= $_drink->strDrink ?>"><?= $_drink->strDrink ?></a>        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'footer_template.php' ?>

