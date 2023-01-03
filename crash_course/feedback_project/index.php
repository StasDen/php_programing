<!--Copying header-->
<?php include "inc/header.php" ?>

<!--Working with form-->
<?php
// Creating variables to validate user input
$name = $email = $body = "";  // Note: we are using shorthand(don't use $name = ""; $email = ""; etc)
$name_err = $email_err = $body_err = "";

// Getting connection var from header file
global $conn;

// If user clicked "Submit" button - validating user input
if (isset($_POST["submit"])) {
    // Validating "name"
    if (empty($_POST["name"])) {
        $name_err = "Please, enter your name";
    } else {
        // Checking if val is set and filtering if needed
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // Validating "email"
    if (empty($_POST["email"])) {
        $email_err = "Please, enter your email account";
    } else {
        // Note: using special filter for emails
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    }

    // Validating "body"
    if (empty($_POST["body"])) {
        $body_err = "Please, enter your feedback";
    } else {
        $body = filter_input(INPUT_POST, "body", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // Checking for errors
    // If there aren't any error - inserting new data to db table
    if (empty($name_err) and empty($email_err) and empty($body_err)) {
        $sql = "INSERT INTO feedback(name, email, body) VALUES ('${name}', '${email}', '${body}')";  // Sql insert code

        // If there are no problems with sql query - redirecting user to "feedback" page
        if (mysqli_query($conn, $sql)) {
            header("Location: feedback.php");
        } else {
            echo "Database error: " . mysqli_error($conn) . " ";
        }
    }
}
?>

<img src="/crash_course/feedback_project/img/logo.png" class="w-25 mb-3" alt="Logo">
<h1>Send your feedback</h1>

<form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>" class="mt-4 w-75">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <!--If there is name error - changing bootstrap class to better inform user-->
        <input type="text" class="form-control <?php echo $name_err ? ' is-invalid' : null; ?>" id="name" name="name"
               placeholder="Enter your name">
        <!--Printing error-->
        <!--Note: if there isn't error, we will print nothing("")-->
        <div id="validationServerFeedback" class="invalid-feedback">
            <?php echo $name_err; ?>
        </div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?php echo $email_err ? ' is-invalid' : null; ?>" id="email"
               name="email" placeholder="Enter your email">
        <div id="validationServerFeedback" class="invalid-feedback">
            <?php echo $email_err; ?>
        </div>
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <!--Using "textarea" instead of just input for bigger text-->
        <textarea class="form-control <?php echo $body_err ? ' is-invalid' : null; ?>" id="body" name="body"
                  placeholder="Enter your feedback"></textarea>
        <div id="validationServerFeedback" class="invalid-feedback">
            <?php echo $body_err; ?>
        </div>
    </div>
    <div class="mb-3">
        <input type="submit" name="submit" value="Submit" class="btn btn-dark w-100">
    </div>
</form>

<!--Note: to copy file, we can also use "require"-->
<?php require "inc/footer.php" ?>
