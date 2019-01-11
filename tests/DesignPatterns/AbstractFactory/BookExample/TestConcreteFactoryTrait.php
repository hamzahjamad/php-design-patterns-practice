<?php
namespace Tests\DesignPatterns\AbstractFactory\BookExample;

use App\DesignPatterns\AbstractFactory\BookExample\AbstractBookFactory;

trait TestConcreteFactoryTrait 
{
  public function executeTestConcreteFactory(AbstractBookFactory $bookFactoryInstance)
  {
      $phpBookOne = $bookFactoryInstance->makePHPBook();
      $this->writeln('first php Author: '.$phpBookOne->getAuthor());
      $this->writeln('first php Title: '.$phpBookOne->getTitle());

      $phpBookTwo = $bookFactoryInstance->makePHPBook();
      $this->writeln('second php Author: '.$phpBookTwo->getAuthor());
      $this->writeln('second php Title: '.$phpBookTwo->getTitle());

      $mySqlBook = $bookFactoryInstance->makeMySQLBook();
      $this->writeln('MySQL Author: '.$mySqlBook->getAuthor());
      $this->writeln('MySQL Title: '.$mySqlBook->getTitle());
  }

  public function writeln($line_in)
  {
  	echo "$line_in \n";
  }
}