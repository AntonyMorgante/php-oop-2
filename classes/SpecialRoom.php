<?php
class SpecialRoom extends Room{
    private $smoke;
    private $water;
    private $vibration;

    public function __construct($_name,$_capacity,$_shows,$_smoke,$_water,$_vibration){
        parent::__construct($_name, $_capacity, $_shows);
        $this->smoke = $_smoke;
        $this->water = $_water;
        $this->vibration = $_vibration;
    }
}