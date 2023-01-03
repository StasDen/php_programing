<?php
// Another possible way to write comment
/*
 Var types in PHP: integer, float, string, boolean, null, array, object, resource(special var which holds a resource)
 Variables must start with "$" sign("ugly language")
 Vars are case-sensitive($name != $NAME)
 */

$str = "Hello";
$int = 77;
$float = 40.55;
$bool = true;

// Printing var
echo $float;

// Concatenating strings(symbol "+" == ".")
echo $str . " is " . $int;
// Or we can use just "${str}"("{}" are just for better reading code)
echo "${str} is ${int}";

// Other usages of "echo"
echo 5 + 5;  // Note: we can use "5" + "5" as well
echo 10 % 3;  // Getting remainder of 10/3(1)

// Constant var
define("HOST1", "localhost1");  // Old way to create constant
const HOST2 = "localhost2";  // In PHP 8.1+ we can use just "const"
