<?php 

$types = [
    "Alcoholic",
    "Non alcoholic",
    ];

//Default type 
if(!isset($_GET['type'])){
    $_GET['type'] = '';
}
