<?php
function inverse($x): float
{
    // If x === 0
    if (!$x) {
        throw new Exception("Division by zero");
    }

    return 1 / $x;
}

try {
    echo inverse(10);
    echo inverse(0);
} catch (Exception $e) {
    // If err occurred - printing err message
    echo "Caught exception: " . $e->getMessage() . " ";
} finally {
    echo "First finally";  // Note: "finally" block executes always
}

echo "Hello, world!";  // Note: code is running even after err occurred
