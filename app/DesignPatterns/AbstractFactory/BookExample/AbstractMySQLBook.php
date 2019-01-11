<?php
namespace App\DesignPatterns\AbstractFactory\BookExample;

abstract class AbstractMySQLBook extends AbstractBook {
	protected $subject = "MySQL";
}