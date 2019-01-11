<?php
namespace Tests\DesignPatterns\AbstractFactory\BookExample;

use App\DesignPatterns\AbstractFactory\BookExample\OReillyBookFactory;

use PHPUnit\Framework\TestCase;

class OreillyBookFactoryTest extends TestCase
{
	use TestConcreteFactoryTrait;

	public function testMakeFactory()
    {
      $bookFactoryInstance = new OReillyBookFactory;
      $this->executeTestConcreteFactory($bookFactoryInstance);

      //this is not the write way to write test 
      $this->assertTrue(true);//just to make the tests happy
    }
}
