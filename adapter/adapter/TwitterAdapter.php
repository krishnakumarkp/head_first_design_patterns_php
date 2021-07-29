<?php
namespace adapter;

use target\SocialMedia;
use adaptee\Twitter;

class TwitterAdapter implements SocialMedia
{
    private Twitter $twitter ;
    public function __construct(Twitter $twitter)
    {
        $this->twitter = $twitter;
    }
    public function post($msg) 
    {
        $this->twitter->postToTwitter($msg);
    }
}