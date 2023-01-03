<?php
$fruits = ["apple", "orange", "banana"];

// Getting length of the arr
echo count($fruits);

// Searching el in the arr and printing info about it
var_dump(in_array("orange", $fruits));

// Adding el into the arr(method 1) and printing new arr
$fruits[] = "lemon";
print_r($fruits);

// Adding el into the arr(method 2) and printing new arr
array_push($fruits, "strawberry", "mango");  // Multiple val are available
print_r($fruits);

// Adding value at the beginning of the arr and printing new arr
array_unshift($fruits, "pear");
print_r($fruits);

// Deleting val in the arr and printing new arr
array_pop($fruits);  // Deleting last element
print_r($fruits);

// Deleting first val in the arr and printing new arr
array_shift($fruits);
print_r($fruits);

// Deleting set arr element and printing new arr
unset($fruits[1]);
print_r($fruits);

// Splitting the arr and printing divided arr
$chunked_arr = array_chunk($fruits, 2);
print_r($chunked_arr);

// Merging two arr(method 1) and printing new merged arr
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
print_r($arr3);

// Merging two arr(method 2) and printing new result arr
$arr4 = [...$arr1, ...$arr2];  // Using spread operator
print_r($arr4);

// Combining two arrays in pairs key - value. Printing output arr
$colors = ["green", "red", "yellow"];
$fruits = ["avocado", "apple", "banana"];
$dict = array_combine($colors, $fruits);
print_r($dict);

// Getting keys of the arr and printing them
$keys = array_keys($dict);
print_r($keys);

// Flipping keys and val(keys are values and values are keys) in the arr. Printing result arr
$flipped_arr = array_flip($dict);
print_r($flipped_arr);

// Creating arr with num from 1 to 30
$num = range(1, 30);  // Note: it works like in Python
print_r($num);  // Output: indexed arr

// Setting func to run for each arr el and printing output arr
$mapped_arr = array_map(function ($num) {
    return "Number: ${num}";
}, $num);
print_r($mapped_arr);

// Filtering the arr. Setting func(condition) for each el. If it passes the condition, remains in the arr. Printing
$filtered_arr = array_filter($num, fn($number) => $number <= 10);  // Note: using arrow func
print_r($filtered_arr);

// Reducing arr to one val(sum of all elements). Printing sum
$sum = array_reduce($num, fn($carry, $current) => $carry + $current);  // Previous val + current
var_dump($sum);
