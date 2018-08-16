<?php
namespace IcyApril\ChapterTwo;

class Dog
{
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
}
?>