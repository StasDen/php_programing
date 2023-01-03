<?php
session_start();

// Deleting session
session_destroy();

// And redirecting to "13_session.php" file
header("Location: /crash_course/13_session.php");
