<?php
// If user have clicked btn
if (isset($_POST["submit"])) {
    // Filtering input data if needed(checking if data have been sent and whether is valid)
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Note: we can also use filter_var()
    $name = filter_var($_POST["name"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    echo $name;
    echo $age;
}
?>

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
