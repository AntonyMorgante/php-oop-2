<?php
class Show{
    private $movie;
    private $date;  
    private $time;

    public function __construct($_movie,$_date,$_time){
        $this->movie = $_movie;
        $this->date = $_date;
        $this->time = $_time;
    }

    public function searchFilm($title,$date){    
        $mov = $this->getMovie();
        $tit = $mov->getMovieTitle();
        if (($tit == $title) && ($this->date==$date)){
            return true;
        }
        return false;
    }

    public function getMovie(){
        return $this->movie;
    }

    public function getShowEnd(){
        $mov = $this->getMovie();
        return "$this->time + {$mov->getMovieLength()}";
    }

    public function getMovieTitle(){
        return "{$this->title}";
    }
}
