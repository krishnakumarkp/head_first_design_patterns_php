<?php
namespace observers;

#use SplObserver;
#use SplSubject;

class SlackObserver implements \SplObserver
{
    protected $priority = 0;

    public function __construct($priority=0)
    {
        $this->priority =$priority;
    }
    public function update(\SplSubject $publisher){

        print_r('SlackObserver'.': '. $publisher->getEvent(). PHP_EOL);

    }
    public  function getPriority(){
        return $this->priority;
    }
}