<?php 

$types = [
    "Alcoholic",
    "Non alcoholic",
    "Optional alcohol",
    ];

//Default type 
if(!isset($_GET['type'])){
    $_GET['type'] = '';
}
