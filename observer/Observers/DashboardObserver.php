<?php
// The observer pattern is a software design pattern in which an object, named the subject, maintains 
// a list of its dependents, called observers, and notifies them automatically of any state changes, 
// usually by calling one of their methods.

namespace observers;

#use SplObserver;
#use SplSubject;

class DashboardObserver implements \SplObserver
{
    protected $priority = 0;

    public function __construct($priority=0)
    {
        $this->priority =$priority;
    }
    public function update(\SplSubject $publisher){

        print_r('DashboardObserver'.': '. $publisher->getEvent(). PHP_EOL);

    }
    public  function getPriority(){
        return $this->priority;
    }
}