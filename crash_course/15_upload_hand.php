<?php
// Checking if button has been clicked
if (isset($_POST["submit"])) {
    // Setting all upload available extensions
    $upload_ext = ["png", "jpg", "jpeg", "gif"];

    // If we selected file to upload
    if (!empty($_FILES["upload"])) {
        // All info about our file
        print_r($_FILES["upload"]);  // Note: works for every file

        // Getting needed val from $_FILES["upload"]
        $file_name = $_FILES["upload"]["name"];
        $file_size = $_FILES["upload"]["size"];
        $file_tmp = $_FILES["upload"]["tmp_name"];

        // Setting directory url where we want to store uploaded files
        $target_dir = "uploads/${file_name}";

        // Creating the arr of two str(using separator ".")
        $split_str = explode(".", $file_name);  // For example: ["cat", "jpg"]

        // Saving the last el of the above str arr(file extension) in lower case
        $str_end = strtolower(end($split_str));

        // Validating file to upload
        // Checking if current file ext is in the extension arr
        if (in_array($str_end, $upload_ext)) {
            // If file size is <= 1mb
            if ($file_size <= 1000000) {
                // Storing file in "uploads" dir
                move_uploaded_file($file_tmp, $target_dir);

                // Showing res message
                $message = "<p style='color: green;'>File uploaded</p>";
            } else {
                $message = "<p style='color: red;'>File is too big</p>";
            }
        } else {
            $message = "<p style='color: red;'>Invalid file extension</p>";
        }
    } else {
        $message = "<p style='color: red;'>Please, choose file to upload</p>";
    }
}
?>

<!--Note: "enctype" attribute is mandatory when uploading files-->
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST" enctype="multipart/form-data">
    <!--Showing message if only it's not null-->
    <?php echo $message ?? null ?>

    <div>
        <label for="upload">Choose file to upload: </label>
        <input type="file" name="upload" value="Upload"/>
    </div>
    <input type="submit" name="submit" value="Submit"/>
</form>
