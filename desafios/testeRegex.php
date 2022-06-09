<?php

$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str); // Outputs 1

$listaNomes = ['ana', 'anamara', 'ana $beatriz', 'silvana', 'clara'];

$str = "ana beatriz";
$pattern = "/\bana/i";


echo preg_match($pattern, $str); // Outputs 1