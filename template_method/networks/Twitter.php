<?php
namespace networks;

use Network;

class Twitter extends Network {
    
    protected function authenticate() {
        // Do the actual work to do the authentication.
        echo "Authenticated with Twitter \n";
    } 

    protected function sendData(string $postData) : array {
        // Do the actual work to send the data.
        echo $postData, " Sent to twitter \n";
        $receipt = array("id"=>"200", "name" => "twitter receipt");
        return $receipt;
    }
}