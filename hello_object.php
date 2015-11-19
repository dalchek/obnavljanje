<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hello, world</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <?php # hello_object.php
        /* This page uses the HelloWorld class
        * THis age just says "Hello, World"
        */

        // Include the class definition 
        require 'HelloWorld.php';

        // Create the object
        $obj = new HelloWorld();
        // Call the sayHello() method
        $obj->sayHello();

        // Say in different languages
        $obj->sayHello('Italian');
        $obj->sayHello('Dutch');
        $obj->sayHello('French');

        // Delete the object
        unset($obj);
    ?>
</body>
</html>