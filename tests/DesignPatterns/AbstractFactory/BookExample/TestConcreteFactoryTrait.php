<?php
namespace Tests\DesignPatterns\AbstractFactory\BookExample;

use App\DesignPatterns\AbstractFactory\BookExample\AbstractBookFactory;

trait TestConcreteFactoryTrait 
{
	public function testMakePHPBook()
    {
      $automatedPHPBookOne = $this->bookFactoryInstance->makePHPBook();
      $this->assertEquals($automatedPHPBookOne->getAuthor(), $this->manualPHPBookOne->getAuthor());
      $this->assertEquals($automatedPHPBookOne->getTitle(), $this->manualPHPBookOne->getTitle());

      $automatedPHPBookTwo = $this->bookFactoryInstance->makePHPBook();
      $this->assertEquals($automatedPHPBookTwo->getAuthor(), $this->manualPHPBookTwo->getAuthor());
      $this->assertEquals($automatedPHPBookTwo->getTitle(), $this->manualPHPBookTwo->getTitle());
    }


    public function testMakeMySQLBook()
    {
      $automatedMySQLBookOne = $this->bookFactoryInstance->makeMySQLBook();
      $this->assertEquals($automatedMySQLBookOne->getAuthor(), $this->manualMySQLBookOne->getAuthor());
      $this->assertEquals($automatedMySQLBookOne->getTitle(), $this->manualMySQLBookOne->getTitle());

      $automatedMySQLBookTwo = $this->bookFactoryInstance->makeMySQLBook();
      $this->assertEquals($automatedMySQLBookTwo->getAuthor(), $this->manualMySQLBookTwo->getAuthor());
      $this->assertEquals($automatedMySQLBookTwo->getTitle(), $this->manualMySQLBookTwo->getTitle());
    }
}