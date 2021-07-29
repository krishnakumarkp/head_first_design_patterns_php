<?php
namespace networks;

use Network;

class Facebook extends Network {

    protected function authenticate() {
        // Do the actual work to do the authentication.
        echo "Authenticated with facebook \n";
    } 

    protected function sendData(string $postData) : array {
        // Do the actual work to send the data.
        echo $postData, " Sent to facebook \n";
        $receipt = array("id"=>"200", "name" => "facebook receipt");
        return $receipt;
    }
}