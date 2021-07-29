<?php
namespace Fitters;

use Fitters\Fitter;

class Welder implements Fitter
{
    public function getDescription()
    {
        echo "I can only fit iron doors \n";
    }
}