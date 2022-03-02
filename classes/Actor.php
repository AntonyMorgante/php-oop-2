<?php
class Actor{
    private $name;
    private $surname;

    public function __construct($_name,$_surname){
        $this->name = $_name;
        $this->surname = $_surname;
    }
}
