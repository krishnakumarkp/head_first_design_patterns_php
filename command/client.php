<?php

use Invokers\RemoteControl;

spl_autoload_register(function ($class_name) {
    $file = $class_name . '.php';
    include $file;
});

$bulb = new Receivers\Bulb();
$onCommand = new Commands\TurnOnBulb($bulb);
$offCommand = new Commands\TurnOffBulb($bulb);

$remoteControl = new Invokers\RemoteControl($onCommand, $offCommand);

$remoteControl->pressOnButton();
$remoteControl->pressOffButton();

$remoteControl->pressOnButton();
$remoteControl->pressUndoButton();
$remoteControl->pressRedoButton();

