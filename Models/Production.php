<?php

class Production {
    public $title;
    public $language;
    public $vote;

    public $genres;

    // costruttore
    function __construct(
        string $title,
        string $language,
        int $vote,
        array $genres,
    ){
        $this->set_title( $title );
        $this->language = $language;
        $this->vote = $vote;
        $this->genres = $genres;
    }

    // metodo settaggio titolo
    public function set_title($title){
        if(empty($title))
        return $this->title = "Titolo non disponibile";
    $this->title = $title;
    }
    
    // metodo lettura titolo
    public function get_title(){
        return $this->title;
    }

}