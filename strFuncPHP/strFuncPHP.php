<?php

function repeat(){
    $times = readline("How many times do you want to repeat your words:");
    $text = readline("Write what you want to repeat:");
    $counting = readline("What letter or word do you want to count:");
    $count = substr_count($text, $counting);
    echo "This text has " . $count . " " . $counting . "\n";
    $repeating = str_repeat($text . "\n", $times);
    $vowels = array("a","e","i","o","u");
    $replace_vowels = str_replace($vowels, "e", $repeating);
    $toLower = strtolower($replace_vowels);
    $reversed = strrev($toLower);
    echo $toLower . "\n";
    echo "And that's the same phrase but reversed order";
    return $reversed;
}

echo(repeat());