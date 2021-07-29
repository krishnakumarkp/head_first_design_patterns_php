<?php
namespace Fitters;

use Fitters\Fitter;

class Carpenter implements Fitter
{
    public function getDescription()
    {
        echo "I can only fit wooden doors \n";
    }
}