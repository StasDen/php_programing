<?php
// Another usage of $_SERVER
echo $_SERVER['PHP_SELF'];  // Location of our file. Note: with it, we can open respective file in browser

// If user clicks submit button, getting data from url
// Note: isset() - we use it quite often
if (isset($_POST["submit"])) {
    echo $_POST["name"], $_POST["age"];
}
?>

<!--Redirecting user to custom page(with val in url) after clicking btn-->
<!--Note: this php code can be without "echo"-->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Noname&age=25">Reload</a>

<!--Creating user form-->
<!--Note: working with request on form, always set form "action" and "method", input "name" attributes-->
<form name="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name"/>
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age"/>
    </div>
    <input type="submit" value="Submit" name="submit">
</form>
