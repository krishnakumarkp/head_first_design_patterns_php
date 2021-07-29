<?php
// The abstract factory pattern provides a way to encapsulate a group of individual factories that have
//  a common theme without specifying their concrete classes.[1] In normal usage, the client software 
//  creates a concrete implementation of the abstract factory and then uses the generic interface 
//  of the factory to create the concrete objects that are part of the theme. 
use Factories\WoodenDoorFactory;
use Factories\IronDoorFactory;

spl_autoload_register(function ($class_name) {
    $file = $class_name . '.php';
    include $file;
});

$woodenFactory = new WoodenDoorFactory();

$door = $woodenFactory->makeDoor();
$expert = $woodenFactory->makeFittingExpert();

$door->getDescription(); 
$expert->getDescription(); 

$ironFactory = new IronDoorFactory();

$door = $ironFactory->makeDoor();
$expert = $ironFactory->makeFittingExpert();

$door->getDescription();  
$expert->getDescription(); 