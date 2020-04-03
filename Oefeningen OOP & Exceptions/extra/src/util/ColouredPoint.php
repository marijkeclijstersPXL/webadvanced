<?php


namespace util;


class ColouredPoint extends Point
{
    private string $rgb;
    private function __construct($x, $y, $rgb)
    {
        parent::__construct($x, $y);
        $this->rgb = $rgb;
    }

    public static function make($x, $y, $rgb){

        $point= new ColouredPoint($x, $y, $rgb);
        return $point;
    }

    public function print(){
        return "(" . $this->getX() . "," . $this->getY() . "), " . parent::__toString();
    }
}