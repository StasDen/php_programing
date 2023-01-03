<?php
// Super globals - variables which are accessible from every scope
// We will use only $_SERVER here(more globals in the next files)

/*
 Some examples:
 $_GET - getting values from url or form(GET request)
 $_POST - getting values from form(POST request)
 $_COOKIE - getting value of website cookie
 $_SESSION - getting value of session var
 $_SERVER - getting info about server
 $_ENV - getting information about web dev environment
 $_REQUEST - getting values from URL or form(works with GET and POST)
 $_FILES - getting data of uploaded files
*/

// Usage of $_SERVER(we can format output with html)
var_dump($_SERVER);  // Note: used in debugging
