<?php
namespace test\domain\access\drivers\SqlGenericDriver;

use orm\domain\access\drivers\SqlGenericDriver;

class limitTest extends \BaseTestCase
{
	/**
	 * @var SqlGenericDriver
	 */
	protected $driver;

	public function setUp() {
		$this->driver = new SqlGenericDriver();
	}

	public function test_LIMITEmptyFields() {
		$this->assertEquals('', $this->driver->_LIMIT());
	}

	public function test_LIMITStart() {
		$start = 1;
		$this->assertEquals(' LIMIT ' . $start, $this->driver->_LIMIT($start));
	}

	public function test_LIMITStartCount() {
		$start = 1;
		$count = rand(10,100);
		$this->assertEquals(' LIMIT ' . $start . ', ' . $count, $this->driver->_LIMIT($start, $count));
	}
}
