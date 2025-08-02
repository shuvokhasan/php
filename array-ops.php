<?php

$names = ['Abdul', 'Ruhul', 'Abul', 'Quddus'];
echo $names[1] . ' ' . $names[3];

$numbers = [32, 22, 12, 11, 54];

// Counting array numbers

echo count($names);
echo 'Nubers of item: ', count($names);

// Sorting Array items

$sorted_numbers = sort($names);
echo $sorted_numbers;

$sorted_names = sort($names);
echo $sorted_names;

// Inserting a value to the end

print_r($names);
echo '<br /><br />';

array_push($names, 'Mahmood');
print_r($names);

// Removing the last item from array

print_r($names);
echo '<br /><br />';

array_pop($names);
print_r($names);

// Removing the first item

print_r($names);
echo '<br /><br />';

array_shift($names);
print_r($names);

// Adding a value into first item

print_r($names);
echo '<br /><br />';

array_unshift($names, 'Rabbani');
print_r($names);

// Creating a new array slicng an existing one

print_r($names);
echo '<br /><br />';

$new_names = array_slice($names, 1, 2);
print_r($new_names);

// Creating a new array and adding new values from an existing one

print_r($names);
echo '<br /><br />';

array_splice($names, 1, 1, 'Mahboob');
print_r($names);

// Searching for an item in array

print_r($names);
echo '<br /><br />';

echo in_array('Abdul', $names);

// Creating array from a comma seperted string

$css = 'hello,to,php';

$cssArray = explode(',', $css);
print_r($cssArray);

// Creating a string from array

$arr = ['hello', 'to', 'php'];

$str = implode(',', $arr);
print_r($str);