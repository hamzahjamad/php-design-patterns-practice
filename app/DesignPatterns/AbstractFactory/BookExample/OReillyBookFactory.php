<?php
namespace App\DesignPatterns\AbstractFactory\BookExample;

class OReillyBookFactory extends AbstractBookFactory
{
  private $context = "OReilly";

  function makePHPBook() {
  	return new OReillyPHPBook;
  }	

  function makeMySQLBook() {
  	return new OReillyMySQLBook;
  }
}