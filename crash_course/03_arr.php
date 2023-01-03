<?php
// Simple arr
$numbers = [1, 44, 567];
$fruits = array("apple", "orange", "banana");

// print_r and var_dump are often used for debugging
print_r($numbers);
var_dump($fruits);

// Printing third el of numbers arr
echo $numbers[2];

// Associative arr(keys are set by dev). Works like dict in Python
$colors = [
    "red" => "f00",
    "blue" => "0f0",
    "green" => "00f"
];

print_r($colors);  // Note: to print arr we use print_r

// Printing el of the associative arr with given key
echo $colors["red"];

// Common usage of associative arr
$person = [
    "first_name" => "Max",
    "last_name" => "Den",
    "email" => "max@gmail.com",
];

echo $person["email"];

// 2-D arr(array of arrays)
$people = [
    [
        "first_name" => "Max",
        "last_name" => "Den",
        "email" => "max@gmail.com",
    ],
    [
        "first_name" => "John",
        "last_name" => "Doe",
        "email" => "john@gmail.com",
    ],
    [
        "first_name" => "Jane",
        "last_name" => "Doe",
        "email" => "jane@gmail.com",
    ]
];

// Printing first name of the first person of people arr
echo $people[1]["first_name"];

var_dump($people);

// Using associative arr like json data
var_dump(json_encode($people));
