<?php

class Production {
    public $title;
    public $language;
    public $vote;

    public $genre;

    // costruttore
    function __construct(
        string $title,
        string $language,
        int $vote,
        Genre $genre,
    ){
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
        $this->genre = $genre;
    }

}