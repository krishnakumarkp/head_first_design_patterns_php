<?php
class Book {
    private $auther;
    private $title;
    function __construct($title_in, $auther_in)
    {
        $this->auther = $auther_in;
        $this->title = $title_in;
    }
    function getAuthor() {
        return $this->auther;
    }
    function getTitle() {
        return $this->title;
    }
    function getAuthorAndTitle() {
        return $this->getTitle() . ' by' . $this->getAuthor();
    }
}

