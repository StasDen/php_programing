<?php
// for loop example
for ($x = 0; $x <= 10; $x++) {
    echo $x;
}

// while loop example
$y = 5;
while ($y <= 10) {
    echo "Number" . $y . "<br>";
    $y++;  // Note: when working with while, don't forget to change value(to avoid infinite running)
}

// do while loop example(not so popular as for or while)
$z = 8;
do {
    echo "Number" . $z . "<br>";
    $z++;
} while ($z < 15);

// Working with obj in arr(using for loop)
// count() returns size of the arr
$posts = ["First post", "Second post", "Third post"];
for ($x = 0; $x < count($posts); $x++) {
    echo $posts[$x];
}

// Using foreach loop(we use them quite often)
foreach ($posts as $post) {
    echo $post;
}

// Working with associative arr
$person = [
    "first_name" => "John",
    "second_name" => "Doe",
    "email" => "john@example.com",
];
foreach ($person as $key => $value) {
    echo $key . " - " . $value . "<br>";
}
