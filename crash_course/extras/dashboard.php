<?php
session_start();  // Starting session on another related page

// If session var exists - greeting user
if (isset($_SESSION["username"])) {
    echo "<h1>" . "Welcome " . $_SESSION["username"] . "</h1>";
    echo '<a href="logout.php">Logout</a>';
} else {
    echo "<h1>Welcome, Guest</h1>";
    echo '<a href="/crash_course/13_session.php">Home</a>';
}
