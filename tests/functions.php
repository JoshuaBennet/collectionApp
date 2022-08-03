<?php
require 'functions.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase
{
    function testSuccessDisplayRaces()
    {
        $input = [
            


        ];
        $expectedOutput = '';
        $actualOutput = createRaceItem($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }
    function testFailureDisplayRaces()
    {
        $input = ['red', 'yellow', 'blue', 'green'];
        $expectedOutput = '';
        $actualOutput= createRaceItem($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }
















}



