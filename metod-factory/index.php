<?php
use HiringManagers\DevelopmentManager;
use HiringManagers\MarketingManager;
use HiringManagers\QAManager;

spl_autoload_register(function ($class_name) {
    $file = $class_name . '.php';
    include $file;
});

$devManager = new DevelopmentManager();
$devManager->takeInterview(); 

$marketingManager = new MarketingManager();
$marketingManager->takeInterview(); 

$qaManager = new QAManager();
$qaManager->takeInterview(); 