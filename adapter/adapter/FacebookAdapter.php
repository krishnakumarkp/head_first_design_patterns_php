<?php
namespace adapter;

use target\SocialMedia;
use adaptee\Facebook;

class FacebookAdapter implements SocialMedia
{
    private Facebook $facebook ;
    public function __construct(Facebook $facebook)
    {
        $this->facebook = $facebook;
    }
    public function post($msg) 
    {
        $this->facebook->postToFacebook($msg);
    }
}