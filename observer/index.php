<?php
use Publishers\Publisher;
use Observers\EmailObserver;
use Observers\SlackObserver;
use Observers\DashboardObserver;
spl_autoload_register(function ($class_name) {
    $file = $class_name . '.php';
    include $file;
});

$noty = new Publisher('NotificationPublisher');

$email = new EmailObserver(50);
$slack = new SlackObserver(10);
$dashboard = new DashboardObserver(30);

// Attach observers
$noty->attach($email);
$noty->attach($slack);
$noty->attach($dashboard);
// Set event that will be broadcasted
$noty->setEvent("Server LNX109 is going down");

$noty->setEvent('China break down!');