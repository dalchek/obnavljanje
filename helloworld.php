<?php 
/**
 * This page defines the HelloWorld class
 * 
 * Written for chapter 4, "Basic object-oriented programming"
 * of the book "PHP Advanced and object-oriented programming"
 * @author Larry ULLman
 * @copyright (c) 2012
 */
/**
 * The HelloWorld class says "Hello, world!" in different languages
 * 
 * The HelloWorld class is mostly for demostarion purposes
 * It's not really a good use of OOP
 * commitovano na gitHub 2th
 */

class HelloWorld {
    /**
     * 
     * @param type $language Function that says"Hello, world" in different languages
     * @param string $language Default is "english"
     * @return void
     */
	
	function sayHello($language = 'English') {
		// Put the greeting within P tags
		echo '<p>';

		// print a message specific to a language
		switch ($language) {
			case 'Dutch':
			echo "Hallo, wereld";
			break;
			case 'French':
			echo 'Bonjour, monde';
			break;
			case 'German':
			echo 'Hallo, welt';
			break;
			case 'Italian':
			echo 'Ciao, mondo';
			break;
			case 'Spanish':
			echo 'Hola, mundo';
			break;
			case 'English':
			default:
			echo 'Hello, world';
			break;
		} // .switch
		// Close the HTML paragraph
		echo '</p>';
	} // . sayHello method
} // .HelloWorld class
