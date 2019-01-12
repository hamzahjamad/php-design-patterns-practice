<?php
namespace Tests\DesignPatterns\AbstractFactory\BookExample;

use App\DesignPatterns\AbstractFactory\BookExample\OReillyBookFactory;
use App\DesignPatterns\AbstractFactory\BookExample\OReillyPHPBook;
use App\DesignPatterns\AbstractFactory\BookExample\OReillyMySQLBook;

use PHPUnit\Framework\TestCase;

class OreillyBookFactoryTest extends TestCase
{
	use TestConcreteFactoryTrait;

    protected $bookFactoryInstance;
    protected $manualPHPBookOne;
    protected $manualPHPBookTwo;
    protected $manualMySQLBookOne;
    protected $manualMySQLBookTwo;

	public function setUp()
	{
		$this->bookFactoryInstance = new OReillyBookFactory;
		$this->manualPHPBookOne = new OReillyPHPBook;
		$this->manualPHPBookTwo = new OReillyPHPBook;
		$this->manualMySQLBookOne = new OReillyMySQLBook;
		$this->manualMySQLBookTwo = new OReillyMySQLBook;
	}
}
