<?php

class Movie {

    public $title;
    public $author;
    public $vote;
    public $year;
    public $genre;
    public $description;

    function __construct($_title, $_author, $_vote, $_year, $_genre, $_description)
    {
        $this->title = $_title;
        $this->author = $_author;
        $this->vote = $_vote;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->description = $_description;
    }

}