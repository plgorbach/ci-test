<?php
require_once('./Calc.php');

class CalcTest extends PHPUnit_Framework_TestCase
{

	public function testRun()
	{
		$calculator = new Calc();
		$this->assertEqual(1.5, $calculator->run());
	}
}