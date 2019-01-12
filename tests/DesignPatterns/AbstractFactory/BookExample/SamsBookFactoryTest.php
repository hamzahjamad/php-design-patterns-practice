<?php
namespace Tests\DesignPatterns\AbstractFactory\BookExample;

use App\DesignPatterns\AbstractFactory\BookExample\SamsBookFactory;
use App\DesignPatterns\AbstractFactory\BookExample\SamsPHPBook;
use App\DesignPatterns\AbstractFactory\BookExample\SamsMySQLBook;

use PHPUnit\Framework\TestCase;

class SamsBookFactoryTest extends TestCase
{
	use TestConcreteFactoryTrait;

    protected $bookFactoryInstance;
    protected $manualPHPBookOne;
    protected $manualPHPBookTwo;
    protected $manualMySQLBookOne;
    protected $manualMySQLBookTwo;

	public function setUp()
	{
		$this->bookFactoryInstance = new SamsBookFactory;
		$this->manualPHPBookOne = new SamsPHPBook;
		$this->manualPHPBookTwo = new SamsPHPBook;
		$this->manualMySQLBookOne = new SamsMySQLBook;
		$this->manualMySQLBookTwo = new SamsMySQLBook;
	}
}
