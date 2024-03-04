<?php

class Genre {
    public $name;
    public $description;

    // costruttore
    public function __construct(string $name, string $description){
        $this->name = $name;
        $this->description = $description;
    }

}