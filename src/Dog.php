<?php
namespace IcyApril\ChapterTwo;

class Dog
{
    private static $legCount = 4;
	private $talkcount = 0;

	public function talk() : string
	{
	   $this->talkcount++;
       return "Woof!";
	}

    public function getTalkCount()
    {
       return $this->talkcount;
    }

    public function feed(Food $food) : string
    {
        return "Eaten: " . $food->getFood();
    }

    public static function legCount(): int
 {
    return self::$legCount;

}
}
?>