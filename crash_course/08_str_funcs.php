<?php
$str = "Hello World!";

// Getting and printing str length
echo strlen($str);

// Getting first occurrence of the letter in str. Printing its position
echo strpos($str, "o");

// Getting last occurrence of the letter in str. Printing its position
echo strrpos($str, "o");

// Reversing and printing str
echo strrev($str);

// Str to upper case. Printing new str
echo strtoupper($str);

// Str to lower case. Printing new str
echo strtolower($str);

// All first letters of the str are with upper case. Printing new str
echo ucwords($str);

// Replacing set word in the str. Printing result arr
echo str_replace("Hello", "Hi", $str);

// Splitting string into 2 substrings. Printing two str
echo substr($str, 0, 5);
echo substr($str, 5);

// if statements with strings
if (str_starts_with($str, "Hello")) {
    echo "Str starts with the word 'Hello'";
}
if (str_ends_with($str, "rld")) {
    echo "Str ends with the word 'rld'";
}

// Html code with strings. Printing vars
$html_str = "<script>alert('Hello!')</script>";
$string = "<h1>Hi, Max</h1>";
echo $string;
echo htmlspecialchars($string);  // Actual set string("<h1>Hi, Max</h1>")

// Formatting str(set val will replace %s, %d or %f)
printf("%s likes to say %s", "Max", "Hello!");  // String val
printf("1 + 1 = %d", 1 + 1);  // Integer val
printf("%f * 17", 22.5);  // Float val
