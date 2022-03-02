<?php
class Room {
    protected $name;
    protected $capacity;
    protected $shows;

    public function __construct($_name,$_capacity,$_shows){
        $this->name = $_name;
        $this->capacity = $_capacity;
        $this->shows = $_shows;
    }
    public function getRoomName(){
        return "{$this->name}";
    }

    public function getRoomCapacity(){
        return "{$this->capacity}";
    }

}
