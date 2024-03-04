<?php

class Production {
    public $title;
    public $language;
    public $vote;

    // costruttore
    function __construct(
        string $title,
        string $language,
        int $vote,
    ){
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
    }

}


// creazione istanza
$first_product = new Production("Batman","Inglese", 9);
var_dump($first_product);

$second_product = new Production("Superman","Inglese", 8);
var_dump($second_product);
