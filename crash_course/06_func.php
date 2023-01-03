<?php
$x = 10;
function registerUser($user = "user"): void  // Creating func with default val which doesn't return anything
{
    // Using already created var from above
    global $x;

    echo "${user} registered as ${x}";
}

registerUser("Max");
echo "<br>";
registerUser();  // Using func def value

// Func which returns greeting string
function greetUser($user): string
{
    return "Hello, ${user}";
}

$res = greetUser("Ralf");  // Note: we can also store func res in var
echo $res;

// Other functions
$addNum = function ($n1, $n2) {
    return $n1 + $n2;
};
echo $addNum(10, 2);

// Example of arrow func
$multiplyNum = fn($n1, $n2) => $n1 * $n2;  // Without "return" and "{}", because there is only 1 row
echo $multiplyNum(5, 9);
