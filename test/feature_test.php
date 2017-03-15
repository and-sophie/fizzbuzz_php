<?php

require "lib/fizzbuzz.php";

echo "Creating new FizzBuzz game \n";

$game = new FizzBuzz;

echo "Passing 3 to the game, expect it to return 'Fizz' \n";
echo "Result: " . $game->play(3) . " \n";

echo "Passing 6 to the game, expect it to return 'Fizz' \n";
echo "Result: " . $game->play(6) . " \n";

echo "Passing 5 to the game, expect it to return 'Buzz' \n";
echo "Result: " . $game->play(5) . "\n";

echo "Passing 10 to the game, expect it to return 'Buzz' \n";
echo "Result: " . $game->play(10) . "\n";

echo "Passing 15 to the game, expect it to return 'FizzBuzz' \n";
echo "Result: " . $game->play(15) . "\n";

echo "Passing 8 to the game, expect it to return '8' \n";
echo "Result: " . $game->play(8) . "\n";
