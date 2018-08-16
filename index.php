<?php
require_once('./vendor/autoload.php');

$oscar = new \IcyApril\ChapterTwo\Dog();

for($talk=1; $talk<=10; $talk++){
    echo $oscar->talk().'  '.
    $oscar->getTalkCount().'<br>'.PHP_EOL;
}
?>