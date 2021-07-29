<?php
namespace publishers;

#use SplSubject;
#use SplObserver;

class Publisher implements \SplSubject
{
    protected $linkedList = array();
    protected $observers = array();
    protected $name;
    protected $event;
    public function __construct($name)
    {

        $this->name = $name;
    }
    public function attach(\SplObserver $observer)
    {
        $observerKey = spl_object_hash($observer);
        $this->observers[$observerKey] = $observer;
        $this->linkedList[$observerKey] = $observer->getPriority();
        arsort($this->linkedList);
    }

    /**
     * @param SplObserver $observer
     * @return void
     */
    public function detach(\SplObserver $observer)
    {
        $observerKey = spl_object_hash($observer);
        unset($this->observers[$observerKey]);
        unset($this->linkedList[$observerKey]);
    }
    public function notify()
    {
        foreach ($this->linkedList as $key => $value) {
            $this->observers[$key]->update($this);
        }
    }
    public function setEvent($event)
    {
        $this->event = $event;
        $this->notify();
    }
    public function getEvent()
    {
        return $this->event;
    }

    public function getSubscribers()
    {
        return $this->getSubscribers();
    }
}