<?php

require_once __DIR__ . "./Models/Production.php";


// creazione istanze
$first_product = new Production("Batman","Inglese", 9);

$second_product = new Production("Superman","Inglese", 8);

$third_product = new Production("Pirati dei Caraibi","Inglese", 7);

$fourth_product = new Production("Tre uomini e una gamba","Italiano", 10);

// array prodotti da stampare
$products = [$first_product, $second_product, $third_product, $fourth_product];