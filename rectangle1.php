<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rectangle</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php # rectangle1.php
/* This age uses the Rectangle class
 * This page shows a bunch of information about a rectangle
 */

// Include the class definition
require 'Rectangle.php';

// Define the necessary variables:
$width = 160;
$height = 75;

// Print a little introduction:
echo "<h2>With a width of $width and a height of $height...</h2>";

// Create a new object:
$r = new Rectangle($width, $height);

// Print the area
echo '<p>The area of the rectangle is ' . $r->getArea() . '</p>';

// Print the perimeter
echo '<p>The perimeter of the rectangle is ' . $r->getPerimeter() . '</p>';

// Is this a square?
echo '<p>This rectangle is ';
if($r->isSquare()) {
    echo 'also';
} else {
    echo 'not';
}
echo ' a square.</p>';

// Delete the object:
unset($r);

?>
</body>
</html>