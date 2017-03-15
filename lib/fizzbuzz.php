<?php

class FizzBuzz {

  public function play($number) {
    $result = "";
    if ($number % 3 == 0) {
      $result = $result . "Fizz";
    }
    if ($number % 5 == 0) {
      $result = $result . "Buzz";
    }
    if ($result == "") {
      return $number;
    }
    return $result;
  }

}
