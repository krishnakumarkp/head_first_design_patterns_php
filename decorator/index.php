<?php
// In object-oriented programming, the decorator pattern is a design pattern that allows behavior to be
//  added to an individual object, dynamically, without affecting the behavior of other objects from 
//  the same class.[1] The decorator pattern is often useful for adhering to the Single Responsibility 
//  Principle, as it allows functionality to be divided between classes with unique areas of concern.
use Decorators\EmailNotification;
use Decorators\SlackNotification;

spl_autoload_register(function ($class_name) {
    $file = $class_name . '.php';
    include $file;
});


$notification = new DBNotification();
$notification = new EmailNotification($notification);
$notification = new SlackNotification($notification);
$notification->notify("Hello world");