<?php
class Movie {
    private $title;
    private $genre;
    private $actors;
    private $length;

    public function __construct($_title,$_genre,$_length,$_actors){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->length = $_length;
        $this->actors = $_actors;
    }

    public function getMovieTitle(){
        return "{$this->title}";
    }

    public function getMovieLength(){
        return "{$this->length}";
    }
}
