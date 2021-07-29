<?php

use Shapes\Circle;
use Shapes\Shape;
use Shapes\Rectangle;
use Shapes\Squre;

class ShapeFactory {

    public function createShape(string $shapeType) : Shape {
        if($shapeType == null) {
            return null;
        }
        if(strcasecmp($shapeType, 'circle') == 0) {
            return new Circle();
        }
        if(strcasecmp($shapeType, 'rectangle') == 0) {
            return new Rectangle();
        }
        if(strcasecmp($shapeType, 'squre') == 0) {
            return new Squre();
        }
        return null;
    }
}