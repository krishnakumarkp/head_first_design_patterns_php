<?php
// A Simple Factory Pattern is one of that returns an instance of one of several possible classes, 
// depending on the data provided to it. This implies that the classes it returns have same parent
// class and methods, but each of them perform task differently for different kind of data.

use Shapes\Shape;
spl_autoload_register(function ($class_name) {
    $file = $class_name . '.php';
    include $file;
});

$shapeFactory = new ShapeFactory();

$shape1 = $shapeFactory->createShape("CIRCLE");
$shape1->draw();

$shape2 = $shapeFactory->createShape("RECTANGLE");
$shape2->draw();

$shape3 = $shapeFactory->createShape("SQURE");
$shape3->draw();