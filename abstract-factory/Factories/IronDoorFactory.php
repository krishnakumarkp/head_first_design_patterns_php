<?php
namespace Factories;

use Fitters\Fitter;
use Fitters\Welder;
use Doors\Door;
use Doors\IronDoor;

class IronDoorFactory implements DoorFactory
{
    public function makeDoor(): Door
    {
        return new IronDoor();
    }

    public function makeFittingExpert(): Fitter
    {
        return new Welder();
    }

}