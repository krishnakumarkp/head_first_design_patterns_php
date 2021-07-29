<?php
namespace Factories;

use Doors\Door;
use Fitters\Fitter;

interface DoorFactory
{
    public function makeDoor(): Door;
    public function makeFittingExpert(): Fitter;
}