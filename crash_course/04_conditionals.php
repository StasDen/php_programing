<?php
// Operators in PHP are the same as in JS(including "===" and "!==")

// If statements
$age = 20;
if ($age >= 18) {
    echo "You are old enough to vote";
} else {
    echo "You aren't old enough to vote";
}

$date = date("H");  // Note: different formats are available(using "H" to get current time hour)
if ($date < 12) {
    echo "Good morning!";
} elseif ($date > 12 and $date < 17) {
    echo "Good afternoon!";
} else {
    echo "Good evening!";
}

// Example of using ternary operator
$greeting = $date < 12 ? "Good morning!" : "Good afternoon!";
echo $greeting;

$posts = ["First post"];

// Checking if val exists
if ($posts) {
    echo $posts[0];
} else {
    echo "There aren't any posts";
}

// Equal ternary operator
echo $posts ? $posts[0] : "There aren't any posts";

// We can also use "??" - some kind of shorthand
echo $posts[0] ?? "None";  // Printing either $posts[0] or None

// Switch example(instead of using many "else if")
$fav_color = "brown";
switch ($fav_color) {
    case "red":
        echo "Your favourite color is red";
        break;
    case "blue":
        echo "Your favourite color is blue";
        break;
    case "green":
        echo "Your favourite color if green";
        break;
    default:
        echo "Your favourite color is neither red, blue or green";
        break;
}

// PHP 8.1+ switch alternative
echo match ($fav_color) {
    "red" => "Your favourite color is red",
    "blue" => "Your favourite color is blue",
    "green" => "Your favourite color if green",
    default => "Your favourite color is neither red, blue or green",
};
