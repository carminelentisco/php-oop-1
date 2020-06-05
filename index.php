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

    public function print() {
        echo "{$this->title}<br>{$this->author}<br>{$this->publication_date}<br>{$this->genere}<br>";
    }
}

$movie1 = new Movie('Volevo nascondermi','Giorgio Diritti','27 febbraio 2020','Drammatico');
$movie1->print();

echo '<hr>';

$movie2 = new Movie('Fast and Furious','Rob Cohen','21 settembre 2001','Azione/Avventura ');
$movie2->print();

