<?php

use adaptee\Twitter;
use adaptee\Facebook;
use adapter\TwitterAdapter;
use adapter\FacebookAdapter;

spl_autoload_register(function ($class_name) {
    $file = $class_name . '.php';
    include $file;
});

$facebook = new FacebookAdapter(new Facebook());
$facebook->post("Cat video");

$twitter = new TwitterAdapter(new Twitter());
$twitter->post("Cat video");

//https://webmobtuts.com/backend-development/talking-to-external-services-easily-with-the-php-adapter-pattern/