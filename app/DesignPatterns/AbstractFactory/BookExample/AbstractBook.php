<?php
namespace App\DesignPatterns\AbstractFactory\BookExample;

abstract class AbstractBook
{
	abstract function getAuthor();
	abstract function getTitle();
}