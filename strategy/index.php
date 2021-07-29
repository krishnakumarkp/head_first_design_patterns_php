<?php

// strategy pattern (also known as the policy pattern) is a behavioral software design pattern that 
// enables selecting an algorithm at runtime. Instead of implementing a single algorithm directly, 
// code receives run-time instructions as to which in a family of algorithms to use.
// Strategy lets the algorithm vary independently from clients that use it.

use FlyBehaviours\FlyWithRockets;
use QuackBehaviours\Squeak;
use FlyBehaviours\FlyWithWings;
use QuackBehaviours\Quack;

spl_autoload_register(function ($class_name) {
    $file = $class_name . '.php';
    include $file;
});

$fb = new FlyWithRockets();
$qb = new Squeak();
$rocketDuck = new Duck($fb,$qb);
$rocketDuck->PerformQuack();
$rocketDuck->PerformFly();

$fb = new FlyWithWings();
$qb = new Quack();
$normalDuck = new Duck($fb, $qb);
$normalDuck->PerformQuack();
$normalDuck->PerformFly();


