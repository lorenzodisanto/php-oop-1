<?php

require_once __DIR__ . "/Production.php";

class Movie extends Production {
    public $profits;
    public $duration;

    // costruttore Movie 
   function __construct(
    string $title,
    string $language,
    int $vote,
    array $genres,
    int $profits, 
    int $duration
    ) {
        // invoco costruttore del genitore 
        parent::__construct($title, $language, $vote, $genres);

        $this->profits = $profits;
        $this->duration = $duration;
    }

}