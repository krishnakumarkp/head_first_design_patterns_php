<?php
class Post implements PostInterface {
    protected $data;
    function __construct($data) {
        $this->data = $data;
    }
    public function getData() :string {
     return $this->data;
    }
}