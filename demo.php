<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Constructor and destructor</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php # demo.php
/* This page define a demo clas
 * and a demo() function.
 * Both are used to show when
 * constructor and descturors are called
 */

// Define the class
class Demo {
    
    // No attributes
    
    // Constructor
    function __construct() {
        echo '<p>In the constructor</p>';
    }
    
    function __destruct() {
        echo '<p>In the destructor</p>';
    }
} // .demo class

// Define a test() function
function test() {
    echo '<p>In the function. Creating a new object...</p>';
    $f = new Demo();
    echo '<p>About to leave the function</p>';
}

// Create the object
echo '<p>Creating a new object...</p>';
$o = new Demo();

// Call the test() function
echo '<p>Calling the function...</p>';
test();

// Delete the object
echo '<p>About to delete the object</p>';
unset($o);

echo '<p>End of the script.</p>';

?>
</body>
</html>