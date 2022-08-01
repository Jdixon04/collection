<?php

require_once 'functions.php';

use PHPUnit\Framework\TestCase;

class unitTests extends TestCase  {
    public function testSuccessDisplayPlayer()
    {
        //expected result of the test
        $expected = '<p>Name: ' . 'Lebron James' . '</p>'.'<p>points: ' . '37062' . '</p>'.'<p>games: ' . '1366'. '</p>'.'<p>rings: ' . '4' . '</p>';
        //input for the test to get the result
        $testInput1 = [['name' => 'Lebron James','points' => 37062, 'games' => 1366,'rings' => 4]];
        
        //run the real function with the input
        $case = displayPlayers($testInput1);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testFailureDisplayPlayer()
    {
        //expected result of the test
        $expected = 'no data';
        //input for the test to get the result
        $testInput1 = [];
        //run the real function with the input
        $case = displayPlayers($testInput1);
        //compare the expected result with the actual result
        $this->assertEquals($expected, $case);
    }

    public function testMalformedDisplayPlayer ()
    {
        //input for the test to get the result
        $testInput1 = 'hi';
        // tell phpunit it should expect an error to be thrown
        $this->expectException(TypeError::class);
        //run the real function with the input
        $case = displayPlayers($testInput1);
        
    }
}