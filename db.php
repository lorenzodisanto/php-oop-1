<?php

require_once __DIR__ . "./Models/Production.php";
require_once __DIR__ . "./Models/Genre.php";
require_once __DIR__ . "./Models/Movie.php";
require_once __DIR__ . "./Models/TVSerie.php";





// creazione istanze
$first_product = new Movie("Batman","Inglese", 9, new Genre("Azione","Bruce Wayne deve salvare Gotham City da Joker, un ex teppista che ha cambiato connotati dopo essere caduto in una vasca di acido."),251409241,126);

$second_product = new Movie("Superman","Inglese", 8, new Genre("Azione","Un neonato proveniente da una galassia remota viene inviato a vivere sulla Terra. Con il passare degli anni, Clark Kent scopre di possedere dei super poteri e inizia a utilizzarli per lottare contro le forze del male."),300451603,143);

$third_product = new TVSerie("Breaking Bad","Inglese", 10, new Genre("Drammatico","Un professore di chimica, Walter White, scopre di avere un cancro ai polmoni giudicato incurabile e decide di diventare socio di uno spacciatore di droga, Jesse, nella produzione di anfetamine, di modo da garantire benessere alla famiglia."),5);

$fourth_product = new Movie("Tre uomini e una gamba","Italiano", 10, new Genre("Comico","Un viaggio in auto dal nord al sud del Paese, in occasione di un matrimonio, si trasforma in un'odissea epica per tre impiegati e una preziosa gamba di legno."),20000000,98);

$fifth_product = new TVSerie("House of cards","Inglese", 8, new Genre("Politico","Il deputato Frank Underwood è un uomo cinico e spietato, disposto a tutto pur scalare i vertici del potere. Nella propria corsa verso la Casa Bianca è spalleggiato dalla moglie Claire, a sua volta spietata e manipolatrice."),6);



// array prodotti da stampare
$products = [$first_product, $second_product, $third_product, $fourth_product, $fifth_product];