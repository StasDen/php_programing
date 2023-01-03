<?php
// Example of cookie: "Hello, Brad!" when visiting website
// Note: cookies are stored on web part

// Setting cookie(key - value pair). Also time when it expires
setcookie("name", "Brad", time() + 86400);  // Expires in one day(86400s)

// Printing cookie if exists
if (isset($_COOKIE["name"])) {
    echo $_COOKIE["name"];
}

// Deleting cookie(also we can do it manually in browser - use F12 and search for "Application" window)
// Uncomment this code, if you want to delete cookie
//setcookie("name", "", time() - 86400);
