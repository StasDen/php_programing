<?php
// Starting user session
session_start();  // Note: always use this if you are working with session

// If user has clicked submit btn
if (isset($_POST["submit"])) {
    // Getting val from form
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = $_POST["password"];  // Note: not sanitizing password(we don't want to show it)

    // Special case
    if ($username == "John" & $password == "password") {
        // Setting new session var
        $_SESSION["username"] = $username;

        // Redirecting to "dashboard.php" file
        header("Location: /crash_course/extras/dashboard.php");
    } else {
        header("Location: /crash_course/extras/dashboard.php");
    }
}
?>

<form name="form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username"/>
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password"/>
    </div>
    <input type="submit" value="Submit" name="submit">
</form>
