<?php

$str = 'This is some text. I will be using PHP string functions to change it';
$str_lower = strtolower($str);
$str_camel = ucwords($str);

echo '<b> output: </b><br><br>' . $str_lower . '<br><br>';
echo  $str_camel . '<br><br>';
echo  lcfirst($str) . '<br><br>';
echo  substr_replace($str,"HTML", 35 , 3) . '<br><br>';
echo  strrev($str) . '<br><br>';
echo  strtoupper($str) . '<br><br>';
echo  str_shuffle($str) . '<br><br>';

echo '<b> The number of words in the string: </b><br><br>';
echo str_word_count($str) . '<br><br>';

echo '<b> The number of characters in the string: </b><br><br>';
echo strlen($str) . '<br><br>';

echo '<b> The word PHP starts at position : </b><br><br>';
echo stripos($str, "php") . '<br><br>';

echo '<b> Voeg minstens 1 andere string functie toe. Leg het gebruik ervan uit </b><br><br>';
echo'strtolower($str) zorgt er voor dat alle letters kleine letters worden<br><br>';
echo strtolower($str) . '<br><br>';
 ?>
