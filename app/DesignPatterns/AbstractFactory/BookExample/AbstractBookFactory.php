<?php
namespace App\DesignPatterns\AbstractFactory\BookExample;


abstract class AbstractBookFactory 
{
  abstract function makePHPBook();
  abstract function makeMYSQLBook();
}