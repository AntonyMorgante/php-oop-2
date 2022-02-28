<?php
class Cinema{
    private $name;
    private $address;
    private $phone;
    private $rooms;

    public function __construct($_name,$_address,$_phone,$_rooms){
        $this->name = $_name;
        $this->address = $_address;
        $this->phone = $_phone;
        $this->rooms = $_rooms;
    }
}
