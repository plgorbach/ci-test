<?php
require_once('./Calc.php');

class CalcTest extends PHPUnit_Framework_TestCase
{

	public function testRun()
	{
		$calculator = new Calc();
		$this->assertEquals(1.5, $calculator->run());
		$this->assertFalse(2.5, $calculator->run());
	}
}