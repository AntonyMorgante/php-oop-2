<?php
class Room {
    private $name;
    private $capacity;
    private $shows;

    public function __construct($_name,$_capacity,$_shows){
        $this->name = $_name;
        $this->capacity = $_capacity;
        $this->shows = $_shows;
    }
}
