<?php

require "lib/fizzbuzz.php";

class FizzBuzzTest extends PHPUnit_Framework_Testcase {

  public function testNumberThree() {
    $testGame = new FizzBuzz;
    $result = $testGame->play(3);
    $this->assertEquals("Fizz", $result);
  }

  public function testNumberSix() {
    $testGame = new FizzBuzz;
    $result = $testGame->play(6);
    $this->assertEquals("Fizz", $result);
  }

  public function testNumberFive() {
    $testGame = new FizzBuzz;
    $result = $testGame->play(5);
    $this->assertEquals("Buzz", $result);
  }

  public function testNumberFifteen() {
    $testGame = new FizzBuzz;
    $result = $testGame->play(15);
    $this->assertEquals("FizzBuzz", $result);
  }

  public function testNumberEight() {
    $testGame = new FizzBuzz;
    $result = $testGame->play(8);
    $this->assertEquals(8, $result);
  }

}
