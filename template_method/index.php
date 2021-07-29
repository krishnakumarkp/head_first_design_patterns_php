<?php
spl_autoload_register(function ($class_name) {
    $file = $class_name . '.php';
    include $file;
});

use networks\Facebook;
use networks\Twitter;

// Template method design pattern is to define an algorithm as a skeleton of operations
// and leave the details to be implemented by the child classes.
// The overall structure and sequence of the algorithm is preserved by the parent class.

$message = 'I like the new article about design patterns in the Lullabot blog!';
//post is the template method
$post = new Post($message);

// Instantiate the network objects and publish.
$network = new Facebook();
$network->post($post);
$network = new Twitter();
$network->post($post);