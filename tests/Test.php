<?php

require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
	public function test_thing()
    {
		$this->assertEquals(true, true);
	}
}
