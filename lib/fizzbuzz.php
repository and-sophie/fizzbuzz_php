<?php

class FizzBuzz {

  public function play($number) {
    $string = "";
    if ($this->isDivisibleByThree($number)) {
      $string .= "Fizz";
    }
    if ($this->isDivisibleByFive($number)) {
      $string .= "Buzz";
    }
    return $string ? $string : $number;
  }

  private function isDivisibleByThree($number) {
    return $number % 3 === 0;
  }

  private function isDivisibleByFive($number) {
    return $number % 5 === 0;
  }

}
