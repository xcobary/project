<?php

//get the content of the file
$contents = file_get_contents('C:/wamp/www/git/private/test.txt');

//split the content of the file into an array of words
$words = explode(' ', $contents);

//extract the first 4 elements of the array
$first = array_slice($words, 0, 4);

//Join the fist 4 elements of the array and echo
echo implode(' - ', $first);


//echo '<pre>';
//print_r($words);
//echo '</pre>';
//readfile('C:/wamp/www/git/private/test.txt');