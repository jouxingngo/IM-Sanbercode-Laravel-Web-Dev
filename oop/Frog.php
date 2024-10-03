<?php 
require_once __DIR__ . "/Animal.php";

class Frog extends Animal {
    public function jump(){
        return "hop hop";
    }
}