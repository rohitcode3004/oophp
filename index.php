<?php
require_once('./vendor/autoload.php');

$oscar = new \IcyApril\ChapterTwo\Dog();

for($talk=1; $talk<=10; $talk++){
    echo $oscar->talk().'  '.
    $oscar->getTalkCount().'<br>'.PHP_EOL;
}

$dogFood = new \IcyApril\ChapterTwo\Food("A Bone");

echo $dogFood->getFood().'<br>';

echo $oscar->feed($dogFood).'<br>';

echo "Dogs have " . \IcyApril\ChapterTwo\Dog::legCount() . " legs." . PHP_EOL;
?>