<?php

require_once __DIR__ . "./Models/Production.php";
require_once __DIR__ . "./Models/Genre.php";



// creazione istanze
$first_product = new Production("Batman","Inglese", 9, new Genre("Azione","Bruce Wayne deve salvare Gotham City da Joker, un ex teppista che ha cambiato connotati dopo essere caduto in una vasca di acido."));

$second_product = new Production("Superman","Inglese", 8, new Genre("Azione","Un neonato proveniente da una galassia remota viene inviato a vivere sulla Terra. Con il passare degli anni, Clark Kent scopre di possedere dei super poteri e inizia a utilizzarli per lottare contro le forze del male."));

$third_product = new Production("Pirati dei Caraibi","Inglese", 7, new Genre("Azione","Will Turner, Elizabeth Swann e Capitan Barbossa s'imbarcano nel tentativo di unirsi ai nove pirati lord della fratellanza, per sconfiggere Lord Cutler Beckett della Compagnia Delle Indie Orientali."));

$fourth_product = new Production("Tre uomini e una gamba","Italiano", 10, new Genre("Comico","Un viaggio in auto dal nord al sud del Paese, in occasione di un matrimonio, si trasforma in un'odissea epica per tre impiegati e una preziosa gamba di legno."));

// array prodotti da stampare
$products = [$first_product, $second_product, $third_product, $fourth_product];