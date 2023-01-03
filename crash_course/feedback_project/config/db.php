<!--Mysql db configuration-->

<?php
// Creating const vars(they will not change in the future)
const DB_HOST = "localhost";  // Note: we can also use deprecated "define()" func
const DB_USER = "root";  // Note: check naming convention
const DB_NAME = "feedbacks";
const DB_PASSWORD = "Most_secure_root_password1";

// Creating connection with mysql db
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Checking connection
// If error occurred - deleting connection
if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}

// Uncomment to check db connection
//echo "Connection success";
