<?php
class Animal{
    public $legs = 4;
    public $cold_blooded = "no";
    public $name;
    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getLegs(){
        return $this->legs;
    }
    
    public function getName(){
        return $this->name;
    }

    public function getColdBlood(){
        return $this->cold_blooded;
    }

}

