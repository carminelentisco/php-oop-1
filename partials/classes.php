<?php 

class Movie {
    private $title;
    private $author;
    private $publication_date;
    private $genere;

    public function __construct($_title, $_author, $_publication_date, $_genere) {
        $this->title = $_title;
        $this->author = $_author;
        $this->publication_date = $_publication_date;
        $this->genere = $_genere;
    }

    public function print($element) {
        echo $this->$element;
    }
}

