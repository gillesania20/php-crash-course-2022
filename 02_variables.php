<?php
/* ----- PHP Data Types ----- */
/*
- String     Series of characters surrounded by quotes
- Integer    Whole numbers
- Float      Decimal numbers
- Boolean    true or false
- Array      Special variable, which can hold more than one value
- Object     A class
- NULL       Empty variable
- Resource   Special variable that holds a resource
*/

/* ----- Variable Rules ----- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- Variables can't start with a number
- Variables can only contain alpha-numberic characters and underscores (A-z, 0-9, and _)
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Renz'; // String
$age = 25; // Int
$has_kids = false; // Boolean
$cash_on_hand = 20.25; // Float

var_dump($name);
echo '<br>';
var_dump($age);
echo '<br>';
var_dump($has_kids);
echo '<br>';
var_dump($cash_on_hand);
echo '<br>';

echo $name . ' is ' . $age . ' years old';
echo '<br>';
echo "${name} is ${age} years old";
echo '<br>';

$x = '5' + '5';
var_dump($x);
echo '<br>';
echo 10 - 5;
echo '<br>';
echo 5 * 6;
echo '<br>';
echo 10 / 2;
echo '<br>';
echo 10 % 3;
echo '<br>';

define('HOST', 'localhost');
define('DB_NAME', 'dev_db');
echo HOST;
echo '<br>';
echo DB_NAME;
echo '<br>';