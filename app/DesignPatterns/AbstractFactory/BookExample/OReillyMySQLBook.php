<?php
namespace App\DesignPatterns\AbstractFactory\BookExample;


class OReillyMySQLBook extends AbstractMySQLBook
{
	private $author;
	private $title;
	
	function __construct()
	{
		$this->author = 'George Reese, Randy Jay Yarger, and Tim King';
        $this->title = 'Managing and Using MySQL';
	}

	public function getAuthor()
	{
		return $this->author;
	}

	public function getTitle()
	{
		return $this->title;
	}
}