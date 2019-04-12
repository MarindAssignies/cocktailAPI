<?php 

$types = [
    "Alcoholic",
    "Non alcoholic",
    "Optional alcohol",
    ];

//choice for form_handle
$cocktails = [
    'alcohol',
    'without alcohol',
    ];

$alcohol = [
    'wine',
    'vodka',
    'beer',
    ];
$non_alcohol = [
    'shake',
    'smoothie',
    ];

$ingredient_alcohol = [];
$ingredient_non_alcohol = [];


//Default type 
if(!isset($_GET['type'])){
    $_GET['type'] = '';
}

// SET DEFAULT FOR FORM_COCKTAILS
if(!isset($_POST['cocktails'])){
    $_POST['cocktails'] = '';
}

if(!isset($_POST['alcohol'])){
    $_POST['alcohol'] = '';
}

if(!isset($_POST['non_alcohol'])){
    $_POST['non_alcohol'] = '';
}

if(!isset($_POST['ingredient_non_alcohol'])){
    $_POST['ingredient_non_alcohol'] = '';
}

if(!isset($_POST['ingredient_alcohol'])){
    $_POST['ingredient_alcohol'] = '';
}



