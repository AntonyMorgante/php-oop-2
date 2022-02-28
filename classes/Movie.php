<?php
class Movie {
    private $title;
    private $genre;
    private $actors;

    public function __construct($_title,$_genre,$_actors){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->actors = $_actors;
    }
}
