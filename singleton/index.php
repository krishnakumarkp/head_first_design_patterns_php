<?php

spl_autoload_register(function ($class_name) {
    $file = $class_name . '.php';
    include $file;
});

$instance = ConnectDbSingle::getInstance();
$conn = $instance->getConnection();
var_dump($conn);

$instance = ConnectDbSingle::getInstance();
$conn = $instance->getConnection();
var_dump($conn);

$instance = ConnectDbSingle::getInstance();
$conn = $instance->getConnection();
var_dump($conn);


$instance = new ConnectDb();
$conn = $instance->getConnection();
var_dump($conn);

$instance =  new ConnectDb();
$conn = $instance->getConnection();
var_dump($conn);

$instance =  new ConnectDb();
$conn = $instance->getConnection();
var_dump($conn);