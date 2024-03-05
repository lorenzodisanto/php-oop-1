<?php

require_once __DIR__ . "/Production.php";

class TVSerie extends Production {
    public $seasons;
    
    // costruttore TVSerie

    function __construct(
    string $title,
    string $language,
    int $vote,
    array $genres,
    int $seasons, 
    ) {

        // invoco costruttore del genitore 
        parent::__construct($title, $language, $vote, $genres);

        $this->seasons = $seasons;
    }

}