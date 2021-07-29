<?php
namespace Factories;

use Fitters\Fitter;
use Fitters\Carpenter;
use Doors\Door;
use Doors\WoodenDoor;

class WoodenDoorFactory implements DoorFactory
{
    public function makeDoor(): Door
    {
        return new WoodenDoor();
    }

    public function makeFittingExpert(): Fitter
    {
        return new Carpenter();
    }

}