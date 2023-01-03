<!--Copying website header-->
<?php include "inc/header.php"; ?>

<?php
// Working with db
// Getting $conn var from "header.php" file
global $conn;

// Sql select code str
$sql = "SELECT * FROM feedback";

// Executing query
$query = mysqli_query($conn, $sql);

// Fetching data from sql select
$feedbacks = mysqli_fetch_all($query, MYSQLI_ASSOC);  // Note: "MYSQLI_ASSOC" mode returns associative arr
?>

<!--Checking if there are user feedbacks-->
<!--Note: we can combine php and html-->
<?php if (!empty($feedbacks)): ?>
    <h2>Latest feedbacks</h2>
<?php endif; ?>

<!--Printing every feedback-->
<?php foreach ($feedbacks as $feedback): ?>
    <!--Note: using bootstrap classes-->
    <div class="card my-3 w-75">
        <div class="card-body text-center">
            <div>
                <!--Printing feedback body-->
                <?php echo $feedback["body"] ?>
                <div class="text-secondary mt-2">
                    <!--Printing username and sent time-->
                    By <?php echo $feedback["name"] ?> on <?php echo $feedback["send_date"] ?>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!--Copying website footer-->
<?php include "inc/footer.php"; ?>
