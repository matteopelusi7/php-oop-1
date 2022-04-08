<?php

class Movie {

    public $title;
    public $author;
    public $vote;
    public $year;
    public $genre;
    public $description;

    function __construct( string $_title, string $_author, string $_vote, int $_year, string $_genre, string $_description )
    {
        $this->title = $_title;
        $this->author = $_author;
        $this->vote = $_vote;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->description = $_description;
    }

    public function getFullMovie() {
        return "Titolo: $this->title <br> Autore: $this->author <br> Voto: $this->vote <br> Anno: $this->year <br> Genere: $this->genre <br> Descrizione: $this->description";
    }

    public function setTitle( string $_title ) {
        if( !is_numeric($_title) ) {
            $this->title = $_title;
        }
    }

}