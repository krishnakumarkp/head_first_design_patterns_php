<?php
namespace Doors;

class IronDoor implements Door 
{
    public function getDescription()
    {
        echo "I am a iron door \n";
    }
}