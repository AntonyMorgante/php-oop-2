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
}
