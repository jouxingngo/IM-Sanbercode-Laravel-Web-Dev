<?php
require_once __DIR__ . "/Animal.php";
require_once __DIR__ . "/Frog.php";
require_once __DIR__ . "/Ape.php";


$sheep = new Animal(name: "Shaun");
echo $sheep->name;
echo "<br>";
echo $sheep->legs;
echo "<br>";
echo $sheep->cold_blooded;
echo "<br>";
echo "<br>";

$frog = new Frog(name: "buduk");
echo $frog->name;
echo "<br>";
echo $frog->legs;
echo "<br>";
echo $frog->cold_blooded;
echo "<br>";
echo $frog->jump();
echo "<br>";
echo "<br>";


$ape = new Ape(name: "kera sakti");
echo $ape->name;
echo "<br>";
echo $ape->legs;
echo "<br>";
echo $ape->cold_blooded;
echo "<br>";
echo $ape->yell();
echo "<br>";

