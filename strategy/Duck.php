<?php
class Duck {
    private FlyBehaviour $flyBehaviour;
    private QuackBehaviour $quackBehaviour;

    function __construct(FlyBehaviour $fb, QuackBehaviour $qb) {
        $this->flyBehaviour = $fb;
        $this->quackBehaviour = $qb;
    }

    public function PerformFly() {
        $this->flyBehaviour->fly();
    }
    public function PerformQuack() {
        $this->quackBehaviour->quack();
    }
    
}