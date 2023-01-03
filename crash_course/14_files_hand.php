<?php
$file = "users.txt";  // Project file name

// Executing code if only file exists
if (file_exists($file)) {
    // Reading file content(method 1)
    echo readfile($file);

    // Reading file content(method 2) - more common way. Printing data
    $opened_file = fopen($file, 'r');
    $content = fread($opened_file, filesize($file));
    echo $content;
} else {
    // If file doesn't exist - creating it and setting data
    $handle = fopen($file, 'w');
    $contents = "Brad" . PHP_EOL . "Jack" . PHP_EOL . "Sara";  // Note: "PHP_EOL" is equal to html "<br>" tag
    fwrite($handle, $contents);
    fclose($handle);  // Note: don't forget to close file after using it in order to avoid security problems
}
