<?php
abstract class Network implements NetworkInterface {

    const SAVED_NEW = true;
    // template method. structure and sequence of the algorithm is preserved here 
    public function post(PostInterface $post) :bool  {
        // Authenticate before posting. Every network uses a different
        // authentication method.
        $this->authenticate();
        // Send the post data and keep the receipt.
        $receipt = $this->sendData($post->getData());
        // Save the receipt in the database.
        $saved = $this->storeReceipt($receipt);
        return $saved == self::SAVED_NEW ;
    }

    //method are made abstract, so their implementation is deferred to subclasses.
    abstract protected function authenticate();

    //method are made abstract, so their implementation is deferred to subclasses.
    abstract protected function sendData(string $postData) : array;

    protected function storeReceipt($receipt) : bool{
        echo $receipt['name'], " is saved\n";
        return true;
    }
}