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

    public function getSmokeInfo(){
        if ($this->smoke){
            return "fumo";
        }
        return "fumo";
    }

    public function getWaterInfo(){
        if ($this->water){
            return "acqua";
        }
        return "acqua";
    }

    public function getVibrInfo(){
        if ($this->vibration){
            return "vibrazione";
        }
        return "vibrazione";
    }
}